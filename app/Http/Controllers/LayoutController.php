<?php

namespace App\Http\Controllers;

class LayoutController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Tata Letak',
      'main'  => 'main.anti_corruption.layout.index',
    ];

    return view('main.layout.template', $data);
  }
}
