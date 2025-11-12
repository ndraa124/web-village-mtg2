<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsIdm;
use App\Models\IdmStatus;
use App\Http\Requests\Infographics\Idm\StoreIdmRequest;
use App\Http\Requests\Infographics\Idm\UpdateIdmRequest;
use Illuminate\Http\Request;

class InfographicsIdmController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsIdm::with('idmStatus');

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhereHas('idmStatus', function ($sq) use ($search) {
          $sq->where('status_name', 'like', "%{$search}%");
        });
    });

    $idms = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Skor IDM',
      'main' => 'admin.infographics.idm.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Skor IDM'
        ],
      ],
      'idms' => $idms
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $idmStatuses = IdmStatus::orderBy('status_desc', 'asc')->get();

    $data = [
      'title' => 'Tambah Data Skor IDM',
      'main' => 'admin.infographics.idm.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.index',
          'title' => 'Daftar Skor IDM'
        ],
        ['title' => 'Tambah Data'],
      ],
      'idmStatuses' => $idmStatuses
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIdmRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsIdm::create($validatedData);

      return redirect()->route('admin.infographics.idm.index')
        ->with('success', 'Data Skor IDM berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsIdm $idm)
  {
    $idm->load('idmStatus');

    $data = [
      'title' => 'Detail Data Skor IDM',
      'main' => 'admin.infographics.idm.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.index',
          'title' => 'Daftar Skor IDM'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'idm' => $idm
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsIdm $idm)
  {
    $idmStatuses = IdmStatus::orderBy('status_desc', 'asc')->get();

    $data = [
      'title' => 'Edit Data Skor IDM',
      'main' => 'admin.infographics.idm.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.idm.index',
          'title' => 'Daftar Skor IDM'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'idm' => $idm,
      'idmStatuses' => $idmStatuses
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateIdmRequest $request, InfographicsIdm $idm)
  {
    $validatedData = $request->validated();

    try {
      $idm->update($validatedData);

      return redirect()->route('admin.infographics.idm.index')
        ->with('success', 'Data Skor IDM berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsIdm $idm)
  {
    try {
      $idm->delete();

      return redirect()->route('admin.infographics.idm.index')
        ->with('success', 'Data Skor IDM berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
