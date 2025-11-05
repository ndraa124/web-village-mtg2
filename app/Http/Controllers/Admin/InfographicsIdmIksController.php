<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsIdmIks;
use App\Http\Requests\Infographics\IdmIks\StoreIdmIksRequest;
use App\Http\Requests\Infographics\IdmIks\UpdateIdmIksRequest;
use Illuminate\Http\Request;

class InfographicsIdmIksController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsIdmIks::query();

    $query->when($search, function ($q, $search) {
      return $q->where('indicator_name', 'like', "%{$search}%")
        ->orWhere('description', 'like', "%{$search}%");
    });

    $idmIksData = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Indikator IKS',
      'main' => 'admin.infographics.idm_iks.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Indikator IKS'
        ],
      ],
      'idmIksData' => $idmIksData
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data Indikator IKS',
      'main' => 'admin.infographics.idm_iks.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.iks.index',
          'title' => 'Daftar Indikator IKS'
        ],
        ['title' => 'Tambah Data'],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIdmIksRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsIdmIks::create($validatedData);

      return redirect()->route('infographics.idm.iks.index')
        ->with('success', 'Data Indikator IKS berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsIdmIks $idmIks)
  {
    $data = [
      'title' => 'Detail Data Indikator IKS',
      'main' => 'admin.infographics.idm_iks.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.iks.index',
          'title' => 'Daftar Indikator IKS'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'idmIks' => $idmIks
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsIdmIks $idmIks)
  {
    $data = [
      'title' => 'Edit Data Indikator IKS',
      'main' => 'admin.infographics.idm_iks.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.idm.iks.index',
          'title' => 'Daftar Indikator IKS'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'idmIks' => $idmIks
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateIdmIksRequest $request, InfographicsIdmIks $idmIks)
  {
    $validatedData = $request->validated();

    try {
      $idmIks->update($validatedData);

      return redirect()->route('infographics.idm.iks.index')
        ->with('success', 'Data Indikator IKS berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsIdmIks $idmIks)
  {
    try {
      $idmIks->delete();

      return redirect()->route('infographics.idm.iks.index')
        ->with('success', 'Data Indikator IKS berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
