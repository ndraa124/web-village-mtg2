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
      return $q->where('title', 'like', "%{$search}%")
        ->orWhere('description', 'like', "%{$search}%");
    });

    $missions = $query->orderByDesc('is_active')
      ->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Visi & Misi',
      'main' => 'admin.content.profile.mission.index',
      'active_tab' => 'mission',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
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
      'main' => 'admin.content.profile.mission.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.content.profile.vision-mission.mission.index',
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

    try {
      Mission::create($validatedData);

      return redirect()->route('admin.content.profile.vision-mission.mission.index')
        ->with('success', 'Misi baru berhasil ditambahkan.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Mission $mission)
  {
    $data = [
      'title' => 'Edit Misi',
      'main' => 'admin.content.profile.mission.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.content.profile.vision-mission.mission.index',
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

    try {
      $mission->title = $validatedData['title'];
      $mission->description = $validatedData['description'];
      $mission->is_active = $newIsActiveState;
      $mission->save();

      return redirect()->route('admin.content.profile.vision-mission.mission.index')
        ->with('success', 'Misi berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Mission $mission)
  {
    $mission->delete();

    return redirect()->route('admin.content.profile.vision-mission.mission.index')
      ->with('success', 'Misi berhasil dihapus.');
  }
}
