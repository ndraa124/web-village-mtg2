<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalProductsCategoryController extends Controller
{
  public function index(Request $request)
  {
    $data = [
      'title' => 'Manajemen Kategori Produk Hukum',
      'main' => 'admin.category.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kategori Produk Hukum'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }
}
