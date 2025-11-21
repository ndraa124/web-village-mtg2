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
    $serviceQuality = AntiCorruptServiceQuality::find(1);

    if (!$serviceQuality) {
      $serviceQuality = new AntiCorruptServiceQuality();
      $serviceQuality->id = 1;
      $serviceQuality->content = "";
      $serviceQuality->user_id = Auth::id();
      $serviceQuality->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
      'main' => 'admin.content.anti_corrupt.service_quality.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kualitas Pelayanan Publik'
        ],
      ],
      'serviceQuality' => $serviceQuality
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptServiceQuality $serviceQuality)
  {
    $data = [
      'title' => 'Edit Kualitas Pelayanan Publik',
      'main' => 'admin.content.anti_corrupt.service_quality.edit',
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
          'route' => 'admin.content.anti.service-quality.index',
          'title' => 'Kualitas Pelayanan Publik'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'serviceQuality' => $serviceQuality
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptServiceQuality $serviceQuality)
  {
    $validatedData = $request->validated();

    try {
      $serviceQuality->update($validatedData);

      return redirect()->route('admin.content.anti.service-quality.index')
        ->with('success', 'Kualitas pelayanan publik berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
