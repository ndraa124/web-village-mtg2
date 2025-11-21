<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentMustSelect;
use App\Http\Requests\Infographics\ResidentMustSelect\StoreResidentMustSelectRequest;
use App\Http\Requests\Infographics\ResidentMustSelect\UpdateResidentMustSelectRequest;
use Illuminate\Http\Request;

class InfographicsResidentMustSelectController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentMustSelect::query();

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%");
    });

    $residentMustSelects = $query->orderBy('id', 'asc')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident_must_select.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Wajib Pilih'
        ],
      ],
      'residentMustSelects' => $residentMustSelects
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.resident_must_select.create',
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
          'route' => 'admin.infographics.resident.must-select.index',
          'title' => 'Wajib Pilih'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentMustSelectRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentMustSelect::create($validatedData);

      return redirect()->route('admin.infographics.resident.must-select.index')
        ->with('success', 'Data penduduk wajib pilih berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentMustSelect $residentMustSelect)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident_must_select.edit',
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
          'route' => 'admin.infographics.resident.must-select.index',
          'title' => 'Wajib Pilih'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'residentMustSelect' => $residentMustSelect
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentMustSelectRequest $request, InfographicsResidentMustSelect $residentMustSelect)
  {
    $validatedData = $request->validated();

    try {
      $residentMustSelect->update($validatedData);

      return redirect()->route('admin.infographics.resident.must-select.index')
        ->with('success', 'Data penduduk wajib pilih berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentMustSelect $residentMustSelect)
  {
    try {
      $residentMustSelect->delete();

      return redirect()->route('admin.infographics.resident.must-select.index')
        ->with('success', 'Data penduduk wajib pilih berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
