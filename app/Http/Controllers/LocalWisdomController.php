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
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Desa Anti Korupsi',
        ],
        [
          'title' => 'Kearifan Lokas',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
