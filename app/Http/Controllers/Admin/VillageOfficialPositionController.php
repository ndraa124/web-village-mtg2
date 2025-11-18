<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VillageOfficialPosition;
use App\Http\Requests\Master\VillageOfficialPosition\StoreVillageOfficialPositionRequest;
use Illuminate\Http\Request;

class VillageOfficialPositionController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = VillageOfficialPosition::query();

    $query->when($search, function ($q, $search) {
      return $q->where('position_name', 'like', "%{$search}%");
    });

    $positions = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Jabatan Organisasi',
      'main' => 'admin.master.village_offical_position.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Jabatan Organisasi',
        ]
      ],
      'positions' => $positions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Jabatan',
      'main' => 'admin.master.village_offical_position.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.village-official-position.index',
          'title' => 'Daftar Jabatan Organisasi',
        ],
        [
          'title' => 'Tambah Jabatan',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreVillageOfficialPositionRequest $request)
  {
    $validatedData = $request->validated();

    try {
      VillageOfficialPosition::create($validatedData);

      return redirect()->route('admin.master.village-official-position.index')
        ->with('success', 'Jabatan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(VillageOfficialPosition $position)
  {
    $data = [
      'title' => 'Edit Jabatan',
      'main' => 'admin.master.village_offical_position.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.village-official-position.index',
          'title' => 'Daftar Jabatan Organisasi',
        ],
        [
          'title' => 'Edit Jabatan',
        ]
      ],
      'position' => $position
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreVillageOfficialPositionRequest $request, VillageOfficialPosition $position)
  {
    $validatedData = $request->validated();

    $position->update($validatedData);

    return redirect()->route('admin.master.village-official-position.index')
      ->with('success', 'Jabatan berhasil diperbarui.');
  }

  public function destroy(VillageOfficialPosition $position)
  {
    $position->delete();

    return redirect()->route('admin.master.village-official-position.index')
      ->with('success', 'Jabatan berhasil dihapus.');
  }
}
