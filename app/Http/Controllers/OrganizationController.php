<?php

namespace App\Http\Controllers;

use App\Models\OrganizationStructure;
use App\Models\OrganizationDeliberation;
use App\Models\OrganizationOfficials;
use App\Models\OrganizationFunctionOfficial;

class OrganizationController extends Controller
{
  public function index()
  {
    $structure = OrganizationStructure::first();
    $deliberation = OrganizationDeliberation::first();

    $allOfficials = OrganizationOfficials::with('position')
      ->orderBy('order', 'asc')
      ->get();

    $headOfficial = $allOfficials->first();
    $staffOfficials = $allOfficials->skip(1);

    $functions = OrganizationFunctionOfficial::orderBy('created_at', 'asc')->get();

    $data = [
      'title' => 'Struktur Organisasi',
      'main'  => 'main.profile.organization.index',
      'header' => [
        'title' => 'Bagan Struktur Organisasi',
        'description' => 'Struktur Organisasi Pemerintahan Desa Motoling Dua',
      ],
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
      'structure' => $structure,
      'deliberation' => $deliberation,
      'headOfficial' => $headOfficial,
      'staffOfficials' => $staffOfficials,
      'functions' => $functions,
    ];

    return view('main.layout.template', $data);
  }
}
