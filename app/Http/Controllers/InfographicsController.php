<?php

namespace App\Http\Controllers;

class InfographicsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.vision_mission.index',
    ];

    return view('main.infographics.index', $data);
  }

  public function apbdes()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.vision_mission.index',
    ];

    return view('main.infographics.apbdes', $data);
  }
}
