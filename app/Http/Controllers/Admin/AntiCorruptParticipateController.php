<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptParticipate;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;

class AntiCorruptParticipateController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptParticipate::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptParticipate();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Partisipasi Masyarakat',
      'main' => 'admin.content.anti_corrupt.participate.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Partisipasi Masyarakat'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptParticipate $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Partisipasi Masyarakat',
      'main' => 'admin.content.anti_corrupt.participate.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.participate.index',
          'title' => 'Anti Korupsi - Partisipasi Masyarakat'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptParticipate $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('admin.content.anti.participate.index')
        ->with('success', 'Partisipasi masyarakat berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
