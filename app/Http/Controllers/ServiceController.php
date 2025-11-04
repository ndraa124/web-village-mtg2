<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.service.index',
    ];

    return view('main.layout.template', $data);
  }
}
