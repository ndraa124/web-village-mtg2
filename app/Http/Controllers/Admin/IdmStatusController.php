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

    $idm_statuses = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar IDM Status',
      'main' => 'admin.idm_status.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'IDM Status',
        ]
      ],
      'idm_statuses' => $idm_statuses
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah IDM Status',
      'main' => 'admin.idm_status.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.idm_status.index',
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

      return redirect()->route('master.idm_status.index')
        ->with('success', 'IDM Status berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(IdmStatus $idm_status)
  {
    $data = [
      'title' => 'Detail IDM Status',
      'main' => 'admin.idm_status.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.idm_status.index',
          'title' => 'IDM Status',
        ],
        [
          'title' => 'Detail IDM Status',
        ]
      ],
      'idm_status' => $idm_status
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(IdmStatus $idm_status)
  {
    $data = [
      'title' => 'Edit IDM Status',
      'main' => 'admin.idm_status.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.idm_status.index',
          'title' => 'IDM Status',
        ],
        [
          'title' => 'Edit IDM Status',
        ]
      ],
      'idm_status' => $idm_status
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreIdmStatusRequest $request, IdmStatus $idm_status)
  {
    $validatedData = $request->validated();

    $idm_status->update($validatedData);

    return redirect()->route('master.idm_status.index')
      ->with('success', 'IDM Status berhasil diperbarui.');
  }

  public function destroy(IdmStatus $idm_status)
  {
    $idm_status->delete();

    return redirect()->route('master.idm_status.index')
      ->with('success', 'IDM Status berhasil dihapus.');
  }
}
