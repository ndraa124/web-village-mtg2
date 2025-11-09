<?php

namespace App\Http\Controllers;

class VisionMissionController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Visi & Misi',
      'main'  => 'main.vision_mission.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Profil',
        ],
        [
          'title' => 'Visi & Misi',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
