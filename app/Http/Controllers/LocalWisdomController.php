<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptLocalWisdom;

class LocalWisdomController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptLocalWisdom::find(1);

    $data = [
      'title' => 'Kearifan Lokal',
      'main'  => 'main.anti_corruption.local_wisdom.index',
      'header' => [
        'title' => 'Kearifan Lokal',
        'description' => 'Nilai-nilai dan praktik budaya lokal yang mendukung integritas, kebersamaan, dan tata kelola yang baik',
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
          'title' => 'Kearifan Lokal',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
