<?php

namespace App\Http\Controllers;

class OrganizationController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Struktur Organisasi',
      'main'  => 'main.profile.organization.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Profil',
        ],
        [
          'title' => 'Struktur Organisasi',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
