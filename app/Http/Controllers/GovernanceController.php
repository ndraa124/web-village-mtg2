<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptGovernance;

class GovernanceController extends Controller
{
  public function index()
  {
    $antiCorrupt = AntiCorruptGovernance::find(1);

    $data = [
      'title' => 'Desa Anti Korupsi - Tata Laksana',
      'main'  => 'main.anti_corruption.governance.index',
      'antiCorrupt' => $antiCorrupt
    ];

    return view('main.layout.template', $data);
  }
}
