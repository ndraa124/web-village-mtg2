<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Village;
use App\Http\Requests\Settings\UpdateSettingsRequest;

class SettingsController extends Controller
{
  public function index()
  {
    $village = Village::firstWhere('is_active', 1);

    $data = [
      'title' => 'Pengaturan',
      'main' => 'admin.settings.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Pengaturan',
        ]
      ],
      'village' => $village
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateSettingsRequest $request, Village $village)
  {
    $village = Village::firstWhere('is_active', 1);

    if (!$village) {
      $village = Village::first();
    }

    if (!$village) {
      return redirect()->back()->with('error', 'Data desa tidak ditemukan.');
    }

    $validatedData = $request->validated();

    if ($request->hasFile('logo')) {
      if ($village->logo && Storage::disk('public')->exists($village->logo)) {
        Storage::disk('public')->delete($village->logo);
      }

      $path = $request->file('logo')->store('logos', 'public');
      $validatedData['logo'] = $path;
    }

    $village->update($validatedData);

    return redirect()->route('admin.settings.index')
      ->with('success', 'Data desa berhasil diperbarui.');
  }
}
