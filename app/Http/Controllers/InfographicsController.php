<?php

namespace App\Http\Controllers;

class InfographicsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.index',
    ];

    return view('main.layout.template', $data);
  }

  public function apbdes()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.apbdes',
    ];

    return view('main.layout.template', $data);
  }

  public function stunting()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.stunting',
    ];

    return view('main.layout.template', $data);
  }

  public function socialAssistance()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.social_assistance',
    ];

    return view('main.layout.template', $data);
  }

  public function idm()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.idm',
    ];

    return view('main.layout.template', $data);
  }

  public function sdgs()
  {
    $data = [
      'title' => 'Infografis',
      'main'  => 'main.infographics.sdgs',
    ];

    return view('main.layout.template', $data);
  }
}
