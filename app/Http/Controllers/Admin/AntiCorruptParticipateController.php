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
    $participate = AntiCorruptParticipate::find(1);

    if (!$participate) {
      $participate = new AntiCorruptParticipate();
      $participate->id = 1;
      $participate->content = "";
      $participate->user_id = Auth::id();
      $participate->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
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
      'participate' => $participate
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptParticipate $participate)
  {
    $data = [
      'title' => 'Edit Partisipasi Masyarakat',
      'main' => 'admin.content.anti_corrupt.participate.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.governance.index',
          'title' => 'Desa Anti Korupsi'
        ],
        [
          'route' => 'admin.content.anti.participate.index',
          'title' => 'Partisipasi Masyarakat'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'participate' => $participate
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptParticipate $participate)
  {
    $validatedData = $request->validated();

    try {
      $participate->update($validatedData);

      return redirect()->route('admin.content.anti.participate.index')
        ->with('success', 'Partisipasi masyarakat berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
