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
        $summaries[] = generateSummaryText($gender->gender_name, $genderData);
      }
    }

    $agesList = InfographicsResidentAge::select('age')
      ->distinct()
      ->orderBy('age', 'asc')
      ->pluck('age')
      ->sort(SORT_NATURAL)
      ->values();

    $data = [
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident_age.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Umur',
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
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.resident_age.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.age.index',
          'title' => 'Umur',
        ],
        [
          'title' => 'Tambah Data',
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
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident_age.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.age.index',
          'title' => 'Umur',
        ],
        [
          'title' => 'Edit Data',
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
}
