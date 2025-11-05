<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsIdmIkl;
use App\Http\Requests\Infographics\IdmIkl\StoreIdmIklRequest;
use App\Http\Requests\Infographics\IdmIkl\UpdateIdmIklRequest;
use Illuminate\Http\Request;

class InfographicsIdmIklController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsIdmIkl::query();

    $query->when($search, function ($q, $search) {
      return $q->where('indicator_name', 'like', "%{$search}%")
        ->orWhere('description', 'like', "%{$search}%");
    });

    $idmIklData = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Indikator IKL',
      'main' => 'admin.infographics.idm_ikl.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Indikator IKL'
        ],
      ],
      'idmIklData' => $idmIklData
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data Indikator IKL',
      'main' => 'admin.infographics.idm_ikl.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.ikl.index',
          'title' => 'Daftar Indikator IKL'
        ],
        ['title' => 'Tambah Data'],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIdmIklRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsIdmIkl::create($validatedData);

      return redirect()->route('infographics.idm.ikl.index')
        ->with('success', 'Data Indikator IKL berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsIdmIkl $idmIkl)
  {
    $data = [
      'title' => 'Detail Data Indikator IKL',
      'main' => 'admin.infographics.idm_ikl.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.ikl.index',
          'title' => 'Daftar Indikator IKL'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'idmIkl' => $idmIkl
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsIdmIkl $idmIkl)
  {
    $data = [
      'title' => 'Edit Data Indikator IKL',
      'main' => 'admin.infographics.idm_ikl.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.ikl.index',
          'title' => 'Daftar Indikator IKL'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'idmIkl' => $idmIkl
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateIdmIklRequest $request, InfographicsIdmIkl $idmIkl)
  {
    $validatedData = $request->validated();

    try {
      $idmIkl->update($validatedData);

      return redirect()->route('infographics.idm.ikl.index')
        ->with('success', 'Data Indikator IKL berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsIdmIkl $idmIkl)
  {
    try {
      $idmIkl->delete();

      return redirect()->route('infographics.idm.ikl.index')
        ->with('success', 'Data Indikator IKL berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
