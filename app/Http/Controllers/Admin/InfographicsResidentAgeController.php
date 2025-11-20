<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentAge;
use App\Models\Gender;
use App\Http\Requests\Infographics\ResidentAge\StoreResidentAgeRequest;
use Illuminate\Http\Request;

class InfographicsResidentAgeController extends Controller
{
  public function index(Request $request)
  {
    $filterAge = $request->input('filter_age');
    $filterGender = $request->input('filter_gender');

    $query = InfographicsResidentAge::with('gender');

    $query->when($filterAge, function ($q) use ($filterAge) {
      return $q->where('age', $filterAge);
    });

    $query->when($filterGender, function ($q) use ($filterGender) {
      return $q->where('gender_id', $filterGender);
    });

    $ages = $query->orderBy('id', 'asc')
      ->paginate(10)
      ->appends($request->query());

    $allStatsData = InfographicsResidentAge::with('gender')->get();
    $genders = Gender::all();
    $summaries = [];

    foreach ($genders as $gender) {
      $genderData = $allStatsData->where('gender_id', $gender->id);

      if ($genderData->count() > 0) {
        $summaries[] = $this->generateSummaryText($gender->gender_name, $genderData);
      }
    }

    $agesList = InfographicsResidentAge::select('age')
      ->distinct()
      ->orderBy('age', 'asc')
      ->pluck('age');

    $data = [
      'title' => 'Daftar Kelompok Umur Penduduk',
      'main' => 'admin.infographics.resident_age.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Kelompok Umur Penduduk',
        ]
      ],
      'ages' => $ages,
      'agesList' => $agesList,
      'genders' => $genders,
      'summaries' => $summaries,
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Kelompok Umur',
      'main' => 'admin.infographics.resident_age.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.infographics.resident.age.index',
          'title' => 'Kelompok Umur Penduduk',
        ],
        [
          'title' => 'Tambah Kelompok Umur',
        ]
      ],
      'genders' => Gender::all()
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentAgeRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentAge::create($validatedData);

      return redirect()->route('admin.infographics.resident.age.index')
        ->with('success', 'Data kelompok umur berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentAge $residentAge)
  {
    $residentAge->load('gender');

    $data = [
      'title' => 'Edit Kelompok Umur',
      'main' => 'admin.infographics.resident_age.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.infographics.resident.age.index',
          'title' => 'Kelompok Umur Penduduk',
        ],
        [
          'title' => 'Edit Kelompok Umur',
        ]
      ],
      'age' => $residentAge,
      'genders' => Gender::all()
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreResidentAgeRequest $request, InfographicsResidentAge $residentAge)
  {
    $validatedData = $request->validated();

    $residentAge->update($validatedData);

    return redirect()->route('admin.infographics.resident.age.index')
      ->with('success', 'Data kelompok umur berhasil diperbarui.');
  }

  public function destroy(InfographicsResidentAge $residentAge)
  {
    $residentAge->delete();

    return redirect()->route('admin.infographics.resident.age.index')
      ->with('success', 'Data kelompok umur berhasil dihapus.');
  }

  private function generateSummaryText($genderName, $collection)
  {
    $totalPopulation = $collection->sum('total');
    if ($totalPopulation == 0) return "";

    $maxVal = $collection->max('total');
    $maxGroups = $collection->where('total', $maxVal)->pluck('age')->toArray();
    $maxPercent = number_format(($maxVal / $totalPopulation) * 100, 2);
    $maxAgeString = $this->naturalJoin($maxGroups);

    $minVal = $collection->min('total');
    $minGroups = $collection->where('total', $minVal)->pluck('age')->toArray();
    $minPercent = number_format(($minVal / $totalPopulation) * 100, 2);
    $minAgeString = $this->naturalJoin($minGroups);

    return "Untuk jenis kelamin <strong>{$genderName}</strong>, kelompok umur <strong>{$maxAgeString}</strong> adalah kelompok umur tertinggi dengan " . (count($maxGroups) > 1 ? "masing-masing " : "") . "berjumlah <strong>{$maxVal} orang</strong> atau <strong>{$maxPercent}%</strong>. Sedangkan, kelompok umur <strong>{$minAgeString}</strong> adalah yang terendah dengan jumlah <strong>{$minVal} orang</strong> atau <strong>{$minPercent}%</strong>.";
  }

  private function naturalJoin($list)
  {
    if (count($list) === 0) return '';
    if (count($list) === 1) return $list[0];

    $last = array_pop($list);
    return implode(', ', $list) . ' dan ' . $last;
  }
}
