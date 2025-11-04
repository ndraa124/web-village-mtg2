<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.news.index',
    ];

    return view('main.layout.template', $data);
  }
}
