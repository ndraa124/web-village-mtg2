<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentMarriage;
use App\Models\Marriage;
use App\Http\Requests\Infographics\ResidentMarriage\StoreResidentMarriageRequest;
use App\Http\Requests\Infographics\ResidentMarriage\UpdateResidentMarriageRequest;
use Illuminate\Http\Request;

class InfographicsResidentMarriageController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentMarriage::with('marriage');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('marriage', function ($sq) use ($search) {
        $sq->where('marriage_name', 'like', "%{$search}%");
      });
    });

    $residentMarriages = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Penduduk (Perkawinan)',
      'main' => 'admin.infographics.resident_marriage.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Penduduk (Perkawinan)'
        ],
      ],
      'residentMarriages' => $residentMarriages
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $existingMarriageIds = InfographicsResidentMarriage::pluck('marriage_id');

    $marriages = Marriage::whereNotIn('id', $existingMarriageIds)
      ->orderBy('marriage_name', 'asc')
      ->get();

    $data = [
      'title' => 'Tambah Data Penduduk (Perkawinan)',
      'main' => 'admin.infographics.resident_marriage.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.marriage.index',
          'title' => 'Data Penduduk (Perkawinan)'
        ],
        ['title' => 'Tambah Data'],
      ],
      'marriages' => $marriages
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentMarriageRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentMarriage::create($validatedData);

      return redirect()->route('admin.infographics.resident.marriage.index')
        ->with('success', 'Data perkawinan penduduk berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentMarriage $residentMarriage)
  {
    $addedMarriageIds = InfographicsResidentMarriage::where('id', '!=', $residentMarriage->id)
      ->pluck('marriage_id');

    $marriages = Marriage::whereNotIn('id', $addedMarriageIds)
      ->orderBy('marriage_name', 'asc')
      ->get();

    $data = [
      'title' => 'Edit Data Perkawinan Penduduk',
      'main' => 'admin.infographics.resident_marriage.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.marriage.index',
          'title' => 'Data Penduduk (Perkawinan)'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'residentMarriage' => $residentMarriage,
      'marriages' => $marriages
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentMarriageRequest $request, InfographicsResidentMarriage $residentMarriage)
  {
    $validatedData = $request->validated();

    try {
      $residentMarriage->update($validatedData);

      return redirect()->route('admin.infographics.resident.marriage.index')
        ->with('success', 'Data perkawinan penduduk berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentMarriage $residentMarriage)
  {
    try {
      $residentMarriage->delete();

      return redirect()->route('admin.infographics.resident.marriage.index')
        ->with('success', 'Data perkawinan penduduk berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
