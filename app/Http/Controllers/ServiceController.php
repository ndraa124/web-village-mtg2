<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Layanan Masyarakat',
      'main'  => 'main.service.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Layanan Masyarakat',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
