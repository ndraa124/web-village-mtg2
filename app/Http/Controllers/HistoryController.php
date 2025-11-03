<?php

namespace App\Http\Controllers;

class HistoryController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.history.index',
    ];

    return view('main.history.index', $data);
  }
}
