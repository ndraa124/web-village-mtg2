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
    $antiCorrupt = AntiCorruptLocalWisdom::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptLocalWisdom();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Kearifan Lokal',
      'main' => 'admin.anti_corrupt.local_wisdom.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kearifan Lokal'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptLocalWisdom $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Kearifan Lokal',
      'main' => 'admin.anti_corrupt.local_wisdom.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage.anti.local-wisdom.index',
          'title' => 'Anti Korupsi - Kearifan Lokal'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptLocalWisdom $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('manage.anti.local-wisdom.index')
        ->with('success', 'Kearifan lokal berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
