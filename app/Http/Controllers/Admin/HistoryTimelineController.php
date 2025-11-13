<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryTimelines;
use App\Http\Requests\History\StoreHistoryTimelineRequest;
use App\Http\Requests\History\UpdateHistoryTimelineRequest;

class HistoryTimelineController extends Controller
{
  public function create()
  {
    $data = [
      'title' => 'Tambah Item Timeline Sejarah',
      'main' => 'admin.content.profile.history.timeline.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.history.index',
          'title' => 'Sejarah Desa'
        ],
        [
          'title' => 'Tambah Timeline'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreHistoryTimelineRequest $request)
  {
    $validatedData = $request->validated();
    $validatedData['order'] = $validatedData['order'] ?? 0;

    try {
      HistoryTimelines::create($validatedData);

      return redirect()->route('admin.content.profile.history.index')
        ->with('success', 'Item Timeline baru berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(HistoryTimelines $timeline)
  {
    $data = [
      'title' => 'Edit Item Timeline Sejarah',
      'main' => 'admin.content.profile.history.timeline.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.history.index',
          'title' => 'Sejarah Desa'
        ],
        [
          'title' => 'Edit Timeline'
        ],
      ],
      'timeline' => $timeline
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateHistoryTimelineRequest $request, HistoryTimelines $timeline)
  {
    $validatedData = $request->validated();
    $validatedData['order'] = $validatedData['order'] ?? 0;
    $newIsActiveState = $request->has('is_active');

    try {
      $timeline->fill($validatedData);
      $timeline->is_active = $newIsActiveState;
      $timeline->save();

      return redirect()->route('admin.content.profile.history.index')
        ->with('success', 'Item Timeline berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(HistoryTimelines $timeline)
  {
    $timeline->delete();

    return redirect()->route('admin.content.profile.history.index')
      ->with('success', 'Item Timeline berhasil dihapus.');
  }
}
