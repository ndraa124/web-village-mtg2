<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptLayout;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;
use Mews\Purifier\Facades\Purifier;

class AntiCorruptLayoutController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptLayout::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptLayout();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Tata Letak',
      'main' => 'admin.anti_corrupt.layout.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Tata Letak'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptLayout $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Tata Letak',
      'main' => 'admin.anti_corrupt.layout.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage.anti.layout.index',
          'title' => 'Anti Korupsi - Tata Letak'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptLayout $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('manage.anti.layout.index')
        ->with('success', 'Tata letak berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
