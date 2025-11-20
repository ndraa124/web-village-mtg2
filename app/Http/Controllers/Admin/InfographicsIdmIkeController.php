<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsIdmIke;
use App\Http\Requests\Infographics\IdmIke\StoreIdmIkeRequest;
use App\Http\Requests\Infographics\IdmIke\UpdateIdmIkeRequest;
use Illuminate\Http\Request;

class InfographicsIdmIkeController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsIdmIke::query();

    $query->when($search, function ($q, $search) {
      return $q->where('indicator_name', 'like', "%{$search}%")
        ->orWhere('description', 'like', "%{$search}%");
    });

    $idmIkeData = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Indeks Desa Membangun (IDM)',
      'main' => 'admin.infographics.idm_ike.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Indikator IKE'
        ],
      ],
      'idmIkeData' => $idmIkeData
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.idm_ike.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.ike.index',
          'title' => 'Indikator IKE'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIdmIkeRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsIdmIke::create($validatedData);

      return redirect()->route('admin.infographics.idm.ike.index')
        ->with('success', 'Data Indikator IKE berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsIdmIke $idmIke)
  {
    $data = [
      'title' => 'Detail Data',
      'main' => 'admin.infographics.idm_ike.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.ike.index',
          'title' => 'Indikator IKE'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'idmIke' => $idmIke
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsIdmIke $idmIke)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.idm_ike.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.ike.index',
          'title' => 'Indikator IKE'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'idmIke' => $idmIke
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateIdmIkeRequest $request, InfographicsIdmIke $idmIke)
  {
    $validatedData = $request->validated();

    try {
      $idmIke->update($validatedData);

      return redirect()->route('admin.infographics.idm.ike.index')
        ->with('success', 'Data Indikator IKE berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsIdmIke $idmIke)
  {
    try {
      $idmIke->delete();

      return redirect()->route('admin.infographics.idm.ike.index')
        ->with('success', 'Data Indikator IKE berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
