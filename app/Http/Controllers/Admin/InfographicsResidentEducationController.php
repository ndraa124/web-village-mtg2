<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentEducation;
use App\Models\Education;
use App\Http\Requests\Infographics\ResidentEducation\StoreResidentEducationRequest;
use App\Http\Requests\Infographics\ResidentEducation\UpdateResidentEducationRequest;
use Illuminate\Http\Request;

class InfographicsResidentEducationController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentEducation::with('education');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('education', function ($sq) use ($search) {
        $sq->where('education_name', 'like', "%{$search}%");
      });
    });

    $residentEducations = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Penduduk (Pendidikan)',
      'main' => 'admin.infographics.resident_education.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Penduduk (Pendidikan)'
        ],
      ],
      'residentEducations' => $residentEducations
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $existingEducationIds = InfographicsResidentEducation::pluck('education_id');

    $educations = Education::whereNotIn('id', $existingEducationIds)
      ->orderBy('education_name', 'asc')
      ->get();

    $data = [
      'title' => 'Tambah Data Penduduk (Pendidikan)',
      'main' => 'admin.infographics.resident_education.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.education.index',
          'title' => 'Data Penduduk (Pendidikan)'
        ],
        ['title' => 'Tambah Data'],
      ],
      'educations' => $educations
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentEducationRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentEducation::create($validatedData);

      return redirect()->route('admin.infographics.resident.education.index')
        ->with('success', 'Data pendidikan penduduk berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentEducation $residentEducation)
  {
    $addedEducationIds = InfographicsResidentEducation::where('id', '!=', $residentEducation->id)
      ->pluck('education_id');

    $educations = Education::whereNotIn('id', $addedEducationIds)->get();

    $data = [
      'title' => 'Edit Data Pendidikan Penduduk',
      'main' => 'admin.infographics.resident_education.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.education.index',
          'title' => 'Data Penduduk (Pendidikan)'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'residentEducation' => $residentEducation,
      'educations' => $educations
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentEducationRequest $request, InfographicsResidentEducation $residentEducation)
  {
    $validatedData = $request->validated();

    try {
      $residentEducation->update($validatedData);

      return redirect()->route('admin.infographics.resident.education.index')
        ->with('success', 'Data pendidikan penduduk berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentEducation $residentEducation)
  {
    try {
      $residentEducation->delete();

      return redirect()->route('admin.infographics.resident.education.index')
        ->with('success', 'Data pendidikan penduduk berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
