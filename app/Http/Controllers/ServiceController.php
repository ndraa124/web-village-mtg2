<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Layanan Masyarakat',
      'main'  => 'main.service.index',
      'header' => [
        'title' => 'Layanan Masyarakat',
        'description' => 'Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien bagi seluruh warga Desa Motoling Dua',
      ],
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
