<?php

namespace App\Http\Controllers;

class InfographicsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Penduduk',
      'main'  => 'main.infographics.index',
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
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'IDM',
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
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Infografis',
        ],
        [
          'title' => 'SDGs',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
