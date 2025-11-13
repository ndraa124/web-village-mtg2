<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vision;
use App\Http\Requests\Vision\StoreVisionRequest;
use App\Http\Requests\Vision\UpdateVisionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisionController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Vision::query();

    $query->when($search, function ($q, $search) {
      return $q->where('description', 'like', "%{$search}%");
    });

    $visions = $query->orderByDesc('is_active')
      ->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Visi & Misi',
      'main' => 'admin.content.profile.vision.index',
      'active_tab' => 'vision',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Visi',
        ]
      ],
      'visions' => $visions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Visi',
      'main' => 'admin.content.profile.vision.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.content.profile.vision-mission.vision.index',
          'title' => 'Visi',
        ],
        [
          'title' => 'Tambah Visi',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreVisionRequest $request)
  {
    $validatedData = $request->validated();

    DB::beginTransaction();

    try {
      Vision::where('is_active', true)->update(['is_active' => false]);

      $validatedData['is_active'] = true;
      Vision::create($validatedData);

      DB::commit();

      return redirect()->route('admin.content.profile.vision-mission.vision.index')
        ->with('success', 'Visi baru berhasil ditambahkan dan diaktifkan.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Vision $vision)
  {
    $data = [
      'title' => 'Edit Visi',
      'main' => 'admin.content.profile.vision.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.content.profile.vision-mission.vision.index',
          'title' => 'Visi',
        ],
        [
          'title' => 'Edit Visi',
        ]
      ],
      'vision' => $vision
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateVisionRequest $request, Vision $vision)
  {
    $validatedData = $request->validated();
    $newIsActiveState = $request->has('is_active');

    if ($newIsActiveState == false && $vision->is_active == true) {
      $activeCount = Vision::where('is_active', true)->count();

      if ($activeCount == 1) {
        return back()->withInput()->with(
          'error',
          'Gagal update. Tidak dapat menonaktifkan satu-satunya Visi yang aktif.'
        );
      }
    }

    DB::beginTransaction();

    try {
      $vision->description = $validatedData['description'];

      if ($newIsActiveState == true && $vision->is_active == false) {
        Vision::where('id', '!=', $vision->id)
          ->where('is_active', true)
          ->update(['is_active' => false]);

        $vision->is_active = true;
      } else {
        $vision->is_active = $newIsActiveState;
      }

      $vision->save();

      DB::commit();

      return redirect()->route('admin.content.profile.vision-mission.vision.index')
        ->with('success', 'Visi berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Vision $vision)
  {
    $vision->delete();

    return redirect()->route('admin.content.profile.vision-mission.vision.index')
      ->with('success', 'Visi berhasil dihapus.');
  }
}
