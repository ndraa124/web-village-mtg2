<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use App\Models\Mission;

class VisionMissionController extends Controller
{
  public function index()
  {
    $vision = Vision::where('is_active', true)->first();
    $missions = Mission::where('is_active', true)
      ->orderBy('id', 'asc')
      ->get();

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
      'vision' => $vision,
      'missions' => $missions
    ];

    return view('main.layout.template', $data);
  }
}
