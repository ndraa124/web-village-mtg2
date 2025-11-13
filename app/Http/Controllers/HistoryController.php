<?php

namespace App\Http\Controllers;

use App\Models\HistoryVillage;
use App\Models\HistoryTimelines;

class HistoryController extends Controller
{
  public function index()
  {
    $historyVillage = HistoryVillage::firstOrCreate(['id' => 1]);

    $timelineItems = HistoryTimelines::where('is_active', true)
      ->orderBy('order', 'asc')
      ->get();

    $data = [
      'title' => 'Sejarah Desa',
      'main'  => 'main.profile.history.index',
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
      'historyVillage' => $historyVillage,
      'timelineItems' => $timelineItems,
    ];

    return view('main.layout.template', $data);
  }
}
