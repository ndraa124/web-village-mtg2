<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentReligion;
use App\Models\Religion;
use App\Http\Requests\Infographics\ResidentReligion\StoreResidentReligionRequest;
use App\Http\Requests\Infographics\ResidentReligion\UpdateResidentReligionRequest;
use Illuminate\Http\Request;

class InfographicsResidentReligionController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentReligion::with('religion');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('religion', function ($sq) use ($search) {
        $sq->where('religion_name', 'like', "%{$search}%");
      });
    });

    $residentReligions = $query->orderBy('id', 'asc')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident_religion.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Agama'
        ],
      ],
      'residentReligions' => $residentReligions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $existingReligionIds = InfographicsResidentReligion::pluck('religion_id');

    $religions = Religion::whereNotIn('id', $existingReligionIds)
      ->orderBy('religion_name', 'asc')
      ->get();

    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.resident_religion.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.religion.index',
          'title' => 'Agama'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'religions' => $religions
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentReligionRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentReligion::create($validatedData);

      return redirect()->route('admin.infographics.resident.religion.index')
        ->with('success', 'Data agama penduduk berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentReligion $residentReligion)
  {
    $addedReligionIds = InfographicsResidentReligion::where('id', '!=', $residentReligion->id)
      ->pluck('religion_id');

    $religions = Religion::whereNotIn('id', $addedReligionIds)
      ->orderBy('religion_name', 'asc')
      ->get();

    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident_religion.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.religion.index',
          'title' => 'Agama'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'residentReligion' => $residentReligion,
      'religions' => $religions
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentReligionRequest $request, InfographicsResidentReligion $residentReligion)
  {
    $validatedData = $request->validated();

    try {
      $residentReligion->update($validatedData);

      return redirect()->route('admin.infographics.resident.religion.index')
        ->with('success', 'Data agama penduduk berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentReligion $residentReligion)
  {
    try {
      $residentReligion->delete();

      return redirect()->route('admin.infographics.resident.religion.index')
        ->with('success', 'Data agama penduduk berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
