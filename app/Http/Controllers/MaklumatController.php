<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptMaklumat;

class MaklumatController extends Controller
{
  public function index()
  {
    $maklumat = AntiCorruptMaklumat::find(1);

    $data = [
      'title' => 'Maklumat Pelayanan',
      'main'  => 'main.anti_corruption.maklumat.index',
      'header' => [
        'title' => 'Maklumat Pelayanan',
        'description' => 'Berisi keseluruhan rincian kewajiban dan janji yang terdapat dalam standar pelayanan dan merupakan bentuk legalitas yang memberikan hak kepada masyarakat',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Desa Anti Korupsi',
        ],
        [
          'title' => 'Maklumat Pelayanan',
        ]
      ],
      'maklumat' => $maklumat
    ];

    return view('main.layout.template', $data);
  }
}
