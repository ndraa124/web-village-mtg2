<?php

namespace App\Http\Controllers;

class PotentialController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Potensi Desa',
      'main'  => 'main.potential.index',
      'header' => [
        'title' => 'Temukan Kekayaan Desa Motoling Dua',
        'description' => 'Desa kami diberkahi dengan sumber daya alam melimpah, tanah subur, serta semangat gotong royong warga yang kuat. Jelajahi berbagai potensi yang kami miliki',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Potensi Desa',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
