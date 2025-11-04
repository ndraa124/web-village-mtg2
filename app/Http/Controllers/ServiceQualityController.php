<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptServiceQuality;

class ServiceQualityController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptServiceQuality::find(1);

    $data = [
      'title' => 'Desa Anti Korupsi - Kualitas Pelayanan Publik',
      'main'  => 'main.anti_corruption.service_quality.index',
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
