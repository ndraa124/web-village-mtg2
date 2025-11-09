<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptParticipate;

class ParticipateController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptParticipate::find(1);

    $data = [
      'title' => 'Partisipasi Masyarakat',
      'main'  => 'main.anti_corruption.participate.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Desa Anti Korupsi',
        ],
        [
          'title' => 'Partisipasi Masyarakat',
        ]
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
