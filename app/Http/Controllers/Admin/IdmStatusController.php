<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IdmStatus;
use App\Http\Requests\Master\IdmStatus\StoreIdmStatusRequest;
use Illuminate\Http\Request;

class IdmStatusController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = IdmStatus::query();

    $query->when($search, function ($q, $search) {
      return $q->where('status_desc', 'like', "%{$search}%");
    });

    $idm_status = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar IDM Status',
      'main' => 'admin.master.idm_status.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'IDM Status',
        ]
      ],
      'idm_status' => $idm_status
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah IDM Status',
      'main' => 'admin.master.idm_status.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.idm-status.index',
          'title' => 'IDM Status',
        ],
        [
          'title' => 'Tambah IDM Status',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIdmStatusRequest $request)
  {
    $validatedData = $request->validated();

    try {
      IdmStatus::create($validatedData);

      return redirect()->route('admin.master.idm-status.index')
        ->with('success', 'IDM Status berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(IdmStatus $idmStatus)
  {
    $data = [
      'title' => 'Edit IDM Status',
      'main' => 'admin.master.idm_status.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.idm-status.index',
          'title' => 'IDM Status',
        ],
        [
          'title' => 'Edit IDM Status',
        ]
      ],
      'idm_status' => $idmStatus
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreIdmStatusRequest $request, IdmStatus $idmStatus)
  {
    $validatedData = $request->validated();

    $idmStatus->update($validatedData);

    return redirect()->route('admin.master.idm-status.index')
      ->with('success', 'IDM Status berhasil diperbarui.');
  }

  public function destroy(IdmStatus $idmStatus)
  {
    $idmStatus->delete();

    return redirect()->route('admin.master.idm-status.index')
      ->with('success', 'IDM Status berhasil dihapus.');
  }
}
