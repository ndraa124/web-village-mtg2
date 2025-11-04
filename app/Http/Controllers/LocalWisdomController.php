<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptLocalWisdom;

class LocalWisdomController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptLocalWisdom::find(1);

    $data = [
      'title' => 'Desa Anti Korupsi - Kearifan Lokal',
      'main'  => 'main.anti_corruption.local_wisdom.index',
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
