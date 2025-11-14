<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptSupervision;

class SupervisionController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptSupervision::find(1);

    $data = [
      'title' => 'Pengawasan',
      'main'  => 'main.anti_corruption.supervision.index',
      'header' => [
        'title' => 'Pengawasan',
        'description' => 'Mekanisme pengawasan dan pelaporan dalam penyelenggaraan pemerintahan Desa Motoling Dua',
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
          'title' => 'Pengawasan',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
