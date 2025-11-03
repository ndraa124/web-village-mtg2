<?php

namespace App\Http\Controllers;

class VisionMissionController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.vision_mission.index',
    ];

    return view('main.vision_mission.index', $data);
  }
}
