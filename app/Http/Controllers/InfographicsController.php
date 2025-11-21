<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\InfographicsResident;
use App\Models\InfographicsResidentAge;
use App\Models\InfographicsResidentHamlet;
use App\Models\InfographicsResidentEducation;
use App\Models\InfographicsResidentJob;
use App\Models\InfographicsResidentMustSelect;
use App\Models\InfographicsResidentMarriage;
use App\Models\InfographicsResidentReligion;

class InfographicsController extends Controller
{
  public function resident()
  {
    $residentStats = InfographicsResident::latest()->first();

    $ageLabels = InfographicsResidentAge::select('age')
      ->distinct()
      ->orderBy('age', 'asc')
      ->pluck('age')
      ->sort(SORT_NATURAL)
      ->values();
    $ageRaw = InfographicsResidentAge::with('gender')->get();

    $ageMale = [];
    $ageFemale = [];

    foreach ($ageLabels as $label) {
      $male = $ageRaw->where('age', $label)->where('gender_id', 1)->first();
      $ageMale[] = $male ? $male->total : 0;

      $female = $ageRaw->where('age', $label)->where('gender_id', 2)->first();
      $ageFemale[] = $female ? $female->total : 0;
    }

    $allStatsData = InfographicsResidentAge::with('gender')->get();
    $genders = Gender::all();
    $ageSummaries = [];

    foreach ($genders as $gender) {
      $genderData = $allStatsData->where('gender_id', $gender->id);

      if ($genderData->count() > 0) {
        $ageSummaries[] = generateSummaryText($gender->gender_name, $genderData);
      }
    }

    $religions = InfographicsResidentReligion::with('religion')
      ->orderBy('id', 'asc')
      ->get();

    $religionLabels = $religions->pluck('religion.religion_name');
    $religionTotals = $religions->pluck('total');

    $jobs = InfographicsResidentJob::with('job')
      ->latest('total')
      ->take(10)
      ->get();

    $marriages = InfographicsResidentMarriage::with('marriage')
      ->orderBy('id', 'asc')
      ->get();

    $marriageLabels = $marriages->pluck('marriage.marriage_name');
    $marriageTotals = $marriages->pluck('total');

    $hamlets = InfographicsResidentHamlet::with('hamlet')
      ->orderBy('id', 'asc')
      ->get();

    $hamletLabels = $hamlets->pluck('hamlet.hamlet_name');
    $hamletTotals = $hamlets->pluck('total');

    $educations = InfographicsResidentEducation::with('education')
      ->orderBy('id', 'asc')
      ->get();

    $educationLabels = $educations->pluck('education.education_name');
    $educationTotals = $educations->pluck('total');

    $mustSelects = InfographicsResidentMustSelect::orderBy('year', 'asc')->get();

    $mustSelectLabels = $mustSelects->pluck('year');
    $mustSelectTotals = $mustSelects->pluck('total');

    $data = [
      'title' => 'Penduduk',
      'main'  => 'main.infographics.resident',
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
      'residentStats' => $residentStats,
      'ageLabels' => $ageLabels,
      'ageMale'   => $ageMale,
      'ageFemale' => $ageFemale,
      'ageSummaries' => $ageSummaries,
      'religions' => $religions,
      'religionLabels' => $religionLabels,
      'religionTotals' => $religionTotals,
      'jobs' => $jobs,
      'marriages' => $marriages,
      'marriageLabels' => $marriageLabels,
      'marriageTotals' => $marriageTotals,
      'hamlets' => $hamlets,
      'hamletLabels' => $hamletLabels,
      'hamletTotals' => $hamletTotals,
      'educations' => $educations,
      'educationLabels' => $educationLabels,
      'educationTotals' => $educationTotals,
      'mustSelects' => $mustSelects,
      'mustSelectLabels' => $mustSelectLabels,
      'mustSelectTotals' => $mustSelectTotals,
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
