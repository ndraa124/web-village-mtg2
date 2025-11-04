<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptSupervision;

class SupervisionController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptSupervision::find(1);

    $data = [
      'title' => 'Desa Anti Korupsi - Pengawasan',
      'main'  => 'main.anti_corruption.supervision.index',
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
