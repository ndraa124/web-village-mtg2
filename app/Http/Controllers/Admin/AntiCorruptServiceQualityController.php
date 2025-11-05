<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptServiceQuality;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;

class AntiCorruptServiceQualityController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptServiceQuality::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptServiceQuality();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Kualitas Pelayanan Publik',
      'main' => 'admin.anti_corrupt.service_quality.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kualitas Pelayanan Publik'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptServiceQuality $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Kualitas Pelayanan Publik',
      'main' => 'admin.anti_corrupt.service_quality.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage.anti.service-quality.index',
          'title' => 'Anti Korupsi - Kualitas Pelayanan Publik'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptServiceQuality $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('manage.anti.service-quality.index')
        ->with('success', 'Kualitas pelayanan publik berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
