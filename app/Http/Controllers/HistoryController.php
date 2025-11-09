<?php

namespace App\Http\Controllers;

class HistoryController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah Desa',
      'main'  => 'main.history.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Profil',
        ],
        [
          'title' => 'Sejarah Desa',
        ],
      ],
    ];

    return view('main.layout.template', $data);
  }
}
