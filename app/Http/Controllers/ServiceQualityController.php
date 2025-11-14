<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptServiceQuality;

class ServiceQualityController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptServiceQuality::find(1);

    $data = [
      'title' => 'Kualitas Pelayanan Publik',
      'main'  => 'main.anti_corruption.service_quality.index',
      'header' => [
        'title' => 'Kualitas Pelayanan Publik',
        'description' => 'Standar dan komitmen kami dalam memberikan pelayanan publik yang prima, transparan, dan akuntabel',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Desa Anti Korupsi',
        ],
        [
          'title' => 'Kualitas Pelayanan Publik',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
