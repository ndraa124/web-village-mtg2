<?php

namespace App\Http\Controllers;

class PotentialController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.potential.index',
    ];

    return view('main.layout.template', $data);
  }
}
