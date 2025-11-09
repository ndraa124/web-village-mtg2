<?php

namespace App\Http\Controllers;

class LegalProductsController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Produk Hukum',
      'main'  => 'main.legal_products.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Produk Hukum',
        ]
      ],
    ];

    return view('main.layout.template', $data);
  }
}
