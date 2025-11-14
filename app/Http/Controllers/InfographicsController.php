<?php

namespace App\Http\Controllers;

class InfographicsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Penduduk',
      'main'  => 'main.infographics.index',
      'header' => [
        'title' => 'Data Kependudukan Terkini',
        'description' => 'Informasi lengkap mengenai karakteristik demografi penduduk Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'Penduduk',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }

  public function apbdes()
  {
    $data = [
      'title' => 'Anggaran Pendapatan dan Belanja Desa',
      'main'  => 'main.infographics.apbdes',
      'header' => [
        'title' => 'Ringkasan APBDes ' . date('Y'),
        'description' => 'Transparansi pengelolaan keuangan desa untuk pembangunan dan kesejahteraan masyarakat',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'APBDes',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }

  public function stunting()
  {
    $data = [
      'title' => 'Stunting',
      'main'  => 'main.infographics.stunting',
      'header' => [
        'title' => 'Ringkasan Data Stunting',
        'description' => 'Data balita dan status gizi di Desa Motoling Dua tahun ' . date('Y'),
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'Stunting',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }

  public function socialAssistance()
  {
    $data = [
      'title' => 'Bantuan Sosial',
      'main'  => 'main.infographics.social_assistance',
      'header' => [
        'title' => 'Ringkasan Program Bantuan Sosial (Bansos)',
        'description' => 'Data penyaluran dan penerima manfaat program bantuan sosial di Desa Motoling Dua per Desember ' . date('Y'),
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'Bantuan Sosial',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }

  public function idm()
  {
    $data = [
      'title' => 'Indeks Desa Membangun (IDM)',
      'main'  => 'main.infographics.idm',
      'header' => [
        'title' => 'Ringkasan Status Indeks Desa Membangun (IDM)',
        'description' => 'Potret pencapaian pembangunan desa di Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'Indeks Desa Membangun (IDM)',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }

  public function sdgs()
  {
    $data = [
      'title' => 'Sustainable Development Goals (SDGs)',
      'main'  => 'main.infographics.sdgs',
      'header' => [
        'title' => 'Pencapaian SDGs Desa',
        'description' => 'Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals) Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'Sustainable Development Goals (SDGs)',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
