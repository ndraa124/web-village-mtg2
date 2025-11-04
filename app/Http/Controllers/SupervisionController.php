<?php

namespace App\Http\Controllers;

class SupervisionController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Pengawasan',
      'main'  => 'main.anti_corruption.supervision.index',
    ];

    return view('main.layout.template', $data);
  }
}
