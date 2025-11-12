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
    $antiCorrupt = AntiCorruptSupervision::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptSupervision();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Pengawasan',
      'main' => 'admin.content.anti_corrupt.supervision.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Pengawasan'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptSupervision $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Pengawasan',
      'main' => 'admin.content.anti_corrupt.supervision.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.supervision.index',
          'title' => 'Anti Korupsi - Pengawasan'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptSupervision $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('admin.content.anti.supervision.index')
        ->with('success', 'Pengawasan berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
