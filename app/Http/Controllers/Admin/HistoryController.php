<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryVillage;
use App\Models\HistoryTimelines;
use App\Http\Requests\History\UpdateHistoryVillageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $historyVillage = HistoryVillage::firstOrCreate(['id' => 1]);
    $queryTimelines = HistoryTimelines::query();

    $queryTimelines->when($search, function ($q, $search) {
      return $q->where('hamlet_name', 'like', "%{$search}%");
    });

    $timelineItems = $queryTimelines->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Sejarah Desa',
      'main' => 'admin.content.profile.history.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Sejarah Desa'
        ],
      ],
      'historyVillage' => $historyVillage,
      'timelineItems' => $timelineItems,
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(HistoryVillage $history)
  {
    $data = [
      'title' => 'Edit Asal Usul Desa',
      'main' => 'admin.content.profile.history.village.edit',
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
          'title' => 'Edit'
        ],
      ],
      'history' => $history
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateHistoryVillageRequest $request, HistoryVillage $history)
  {
    $validatedData = $request->validated();

    DB::beginTransaction();

    try {
      if ($request->hasFile('history_image')) {
        if ($history->history_image) {
          Storage::disk('public')->delete($history->history_image);
        }

        $imagePath = $request->file('history_image')->store('history_village', 'public');
        $validatedData['history_image'] = $imagePath;
      } else {
        unset($validatedData['history_image']);
      }

      $history->update($validatedData);

      DB::commit();

      return redirect()->route('admin.content.profile.history.index')
        ->with('success', 'Data Asal Usul dan Foto Historis berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }
}
