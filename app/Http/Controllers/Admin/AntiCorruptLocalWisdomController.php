<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptLocalWisdom;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;

class AntiCorruptLocalWisdomController extends Controller
{
  public function index()
  {
    $localWisdom = AntiCorruptLocalWisdom::find(1);

    if (!$localWisdom) {
      $localWisdom = new AntiCorruptLocalWisdom();
      $localWisdom->id = 1;
      $localWisdom->content = "";
      $localWisdom->user_id = Auth::id();
      $localWisdom->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
      'main' => 'admin.content.anti_corrupt.local_wisdom.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kearifan Lokal'
        ],
      ],
      'localWisdom' => $localWisdom
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptLocalWisdom $localWisdom)
  {
    $data = [
      'title' => 'Edit Kearifan Lokal',
      'main' => 'admin.content.anti_corrupt.local_wisdom.edit',
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
          'route' => 'admin.content.anti.local-wisdom.index',
          'title' => 'Kearifan Lokal'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'localWisdom' => $localWisdom
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptLocalWisdom $localWisdom)
  {
    $validatedData = $request->validated();

    try {
      $localWisdom->update($validatedData);

      return redirect()->route('admin.content.anti.local-wisdom.index')
        ->with('success', 'Kearifan lokal berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
