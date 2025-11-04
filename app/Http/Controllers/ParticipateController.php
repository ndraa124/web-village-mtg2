<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptParticipate;

class ParticipateController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptParticipate::find(1);

    $data = [
      'title' => 'Desa Anti Korupsi - Partisipasi Masyarakat',
      'main'  => 'main.anti_corruption.participate.index',
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
