<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalProductsCategories;
use App\Http\Requests\Master\LegalProductCategory\StoreLegalProductCategoryRequest;
use App\Http\Requests\Master\LegalProductCategory\UpdateLegalProductCategoryRequest;
use Illuminate\Http\Request;

class LegalProductsCategoryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = LegalProductsCategories::query();

    $query->when($search, function ($q, $search) {
      return $q->where('name', 'like', "%{$search}%");
    });

    $categories = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Manajemen Kategori Produk Hukum',
      'main' => 'admin.legal_product_category.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kategori Produk Hukum'
        ],
      ],
      'categories' => $categories
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Kategori Produk Hukum',
      'main' => 'admin.legal_product_category.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'master.legal-product-category.index',
          'title' => 'Kategori Produk Hukum'
        ],
        [
          'title' => 'Tambah Baru'
        ],
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreLegalProductCategoryRequest $request)
  {
    try {
      LegalProductsCategories::create($request->validated());

      return redirect()->route('master.legal-product-category.index')
        ->with('success', 'Kategori berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(LegalProductsCategories $category)
  {
    $data = [
      'title' => 'Edit Kategori Produk Hukum',
      'main' => 'admin.legal_product_category.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'master.legal-product-category.index',
          'title' => 'Kategori Produk Hukum'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'category' => $category
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateLegalProductCategoryRequest $request, LegalProductsCategories $category)
  {
    try {
      $category->update($request->validated());

      return redirect()->route('master.legal-product-category.index')
        ->with('success', 'Kategori berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(LegalProductsCategories $category)
  {
    try {
      $category->delete();

      return redirect()->route('master.legal-product-category.index')
        ->with('success', 'Kategori berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
