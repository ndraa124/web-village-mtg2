<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptSupervision;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;

class AntiCorruptSupervisionController extends Controller
{
  public function index()
  {
    $supervision = AntiCorruptSupervision::find(1);

    if (!$supervision) {
      $supervision = new AntiCorruptSupervision();
      $supervision->id = 1;
      $supervision->content = "";
      $supervision->user_id = Auth::id();
      $supervision->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
      'main' => 'admin.content.anti_corrupt.supervision.index',
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
          'title' => 'Pengawasan'
        ],
      ],
      'supervision' => $supervision
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptSupervision $supervision)
  {
    $data = [
      'title' => 'Edit Pengawasan',
      'main' => 'admin.content.anti_corrupt.supervision.edit',
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
          'route' => 'admin.content.anti.supervision.index',
          'title' => 'Pengawasan'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'supervision' => $supervision
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptSupervision $supervision)
  {
    $validatedData = $request->validated();

    try {
      $supervision->update($validatedData);

      return redirect()->route('admin.content.anti.supervision.index')
        ->with('success', 'Pengawasan berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
