<?php

namespace App\Http\Controllers;

use App\Models\AntiCorruptGovernance;
use App\Models\AntiCorruptSupervision;
use App\Models\AntiCorruptServiceQuality;
use App\Models\AntiCorruptParticipate;
use App\Models\AntiCorruptLocalWisdom;
use App\Models\AntiCorruptMaklumat;

class AntiCorruptController extends Controller
{
  public function governance()
  {
    $governance = AntiCorruptGovernance::find(1);

    $data = [
      'title' => 'Tata Laksana',
      'main'  => 'main.anti_corruption.governance',
      'header' => [
        'title' => 'Tata Laksana',
        'description' => 'Prinsip-prinsip dan implementasi tata kelola pemerintahan desa yang baik di Desa Motoling Dua',
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
          'title' => 'Tata Laksana',
        ]
      ],
      'governance' => $governance
    ];

    return view('main.layout.template', $data);
  }

  public function supervision()
  {
    $supervision = AntiCorruptSupervision::find(1);

    $data = [
      'title' => 'Pengawasan',
      'main'  => 'main.anti_corruption.supervision',
      'header' => [
        'title' => 'Pengawasan',
        'description' => 'Mekanisme pengawasan dan pelaporan dalam penyelenggaraan pemerintahan Desa Motoling Dua',
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
          'title' => 'Pengawasan',
        ]
      ],
      'supervision' => $supervision
    ];

    return view('main.layout.template', $data);
  }

  public function serviceQuality()
  {
    $serviceQuality = AntiCorruptServiceQuality::find(1);

    $data = [
      'title' => 'Kualitas Pelayanan Publik',
      'main'  => 'main.anti_corruption.service_quality',
      'header' => [
        'title' => 'Kualitas Pelayanan Publik',
        'description' => 'Standar dan komitmen kami dalam memberikan pelayanan publik yang prima, transparan, dan akuntabel',
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
          'title' => 'Kualitas Pelayanan Publik',
        ]
      ],
      'serviceQuality' => $serviceQuality
    ];

    return view('main.layout.template', $data);
  }

  public function participate()
  {
    $participate = AntiCorruptParticipate::find(1);

    $data = [
      'title' => 'Partisipasi Masyarakat',
      'main'  => 'main.anti_corruption.participate',
      'header' => [
        'title' => 'Partisipasi Masyarakat',
        'description' => 'Mendorong keterlibatan aktif warga dalam proses pembangunan dan pengawasan pemerintahan desa',
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
          'title' => 'Partisipasi Masyarakat',
        ]
      ],
      'participate' => $participate
    ];

    return view('main.layout.template', $data);
  }

  public function localWisdom()
  {
    $localWisdom = AntiCorruptLocalWisdom::find(1);

    $data = [
      'title' => 'Kearifan Lokal',
      'main'  => 'main.anti_corruption.local_wisdom',
      'header' => [
        'title' => 'Kearifan Lokal',
        'description' => 'Nilai-nilai dan praktik budaya lokal yang mendukung integritas, kebersamaan, dan tata kelola yang baik',
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
          'title' => 'Kearifan Lokal',
        ]
      ],
      'localWisdom' => $localWisdom
    ];

    return view('main.layout.template', $data);
  }

  public function maklumat()
  {
    $maklumat = AntiCorruptMaklumat::find(1);

    $data = [
      'title' => 'Maklumat Pelayanan',
      'main'  => 'main.anti_corruption.maklumat',
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
