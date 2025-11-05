<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Http\Requests\Mission\StoreMissionRequest;
use App\Http\Requests\Mission\UpdateMissionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Mission::query();

    $query->when($search, function ($q, $search) {
      return $q->where('description', 'like', "%{$search}%");
    });

    $missions = $query->orderByDesc('is_active')
      ->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Misi',
      'main' => 'admin.mission.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Misi',
        ]
      ],
      'missions' => $missions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Misi',
      'main' => 'admin.mission.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'mission.index',
          'title' => 'Misi',
        ],
        [
          'title' => 'Tambah Misi',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreMissionRequest $request)
  {
    $validatedData = $request->validated();

    DB::beginTransaction();

    try {
      Mission::where('is_active', true)->update(['is_active' => false]);

      $validatedData['is_active'] = true;
      Mission::create($validatedData);

      DB::commit();

      return redirect()->route('mission.index')
        ->with('success', 'Misi baru berhasil ditambahkan dan diaktifkan.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(Mission $mission)
  {
    $data = [
      'title' => 'Detail Misi',
      'main' => 'admin.mission.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'mission.index',
          'title' => 'Misi',
        ],
        [
          'title' => 'Detail Misi',
        ]
      ],
      'mission' => $mission
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(Mission $mission)
  {
    $data = [
      'title' => 'Edit Misi',
      'main' => 'admin.mission.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'mission.index',
          'title' => 'Misi',
        ],
        [
          'title' => 'Edit Misi',
        ]
      ],
      'mission' => $mission
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateMissionRequest $request, Mission $mission)
  {
    $validatedData = $request->validated();
    $newIsActiveState = $request->has('is_active');

    if ($newIsActiveState == false && $mission->is_active == true) {
      $activeCount = Mission::where('is_active', true)->count();

      if ($activeCount == 1) {
        return back()->withInput()->with(
          'error',
          'Gagal update. Tidak dapat menonaktifkan satu-satunya Misi yang aktif.'
        );
      }
    }

    DB::beginTransaction();

    try {
      $mission->description = $validatedData['description'];

      if ($newIsActiveState == true && $mission->is_active == false) {
        Mission::where('id', '!=', $mission->id)
          ->where('is_active', true)
          ->update(['is_active' => false]);

        $mission->is_active = true;
      } else {
        $mission->is_active = $newIsActiveState;
      }

      $mission->save();

      DB::commit();

      return redirect()->route('mission.index')
        ->with('success', 'Misi berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Mission $mission)
  {
    $mission->delete();

    return redirect()->route('mission.index')
      ->with('success', 'Misi berhasil dihapus.');
  }
}
