<?php

namespace App\Http\Controllers;

class OrganizationController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sejarah',
      'main'  => 'main.organization.index',
    ];

    return view('main.organization.index', $data);
  }
}
