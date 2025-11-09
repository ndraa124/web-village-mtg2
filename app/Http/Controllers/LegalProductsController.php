<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalProducts;
use App\Models\LegalProductsCategories;

class LegalProductsController extends Controller
{
  public function index(Request $request)
  {
    $categories = LegalProductsCategories::orderBy('name', 'asc')->get();

    $query = LegalProducts::with('category')->latest();

    if ($request->filled('category')) {
      $query->where('category_id', $request->category);
    }

    if ($request->filled('year')) {
      $query->where('year', $request->year);
    }

    $legalProducts = $query->paginate(10)->withQueryString();

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
      'legalProducts' => $legalProducts,
      'categories'    => $categories,
      'filters'       => $request->only(['category', 'year']),
    ];

    return view('main.layout.template', $data);
  }
}
