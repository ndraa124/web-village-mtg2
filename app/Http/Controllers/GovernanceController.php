<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptGovernance;

class GovernanceController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptGovernance::find(1);

    $data = [
      'title' => 'Tata Laksana',
      'main'  => 'main.anti_corruption.governance.index',
      'header' => [
        'title' => 'Tata Laksana',
        'description' => 'Prinsip-prinsip dan implementasi tata kelola pemerintahan desa yang baik di Desa Motoling Dua',
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
          'title' => 'Tata Laksana',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
