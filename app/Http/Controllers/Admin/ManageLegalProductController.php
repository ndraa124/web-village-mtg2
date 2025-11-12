<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalProducts;
use App\Models\LegalProductsCategories;
use App\Http\Requests\LegalProducts\StoreLegalProductsRequest;
use App\Http\Requests\LegalProducts\UpdateLegalProductsRequest;
use Illuminate\Http\Request;

class ManageLegalProductController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = LegalProducts::with('category');

    $query->when($search, function ($q, $search) {
      return $q->where('title', 'like', "%{$search}%");
    });

    $legalProducts = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Manajemen Produk Hukum',
      'main' => 'admin.content.legal_products.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Produk Hukum'
        ],
      ],
      'legalProducts' => $legalProducts
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Produk Hukum',
      'main' => 'admin.content.legal_products.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.legal-product.index',
          'title' => 'Produk Hukum'
        ],
        [
          'title' => 'Tambah Baru'
        ],
      ],
      'categories' => LegalProductsCategories::all(),
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreLegalProductsRequest $request)
  {
    try {
      LegalProducts::create($request->validated());

      return redirect()->route('admin.content.legal-product.index')
        ->with('success', 'Produk hukum berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(LegalProducts $legalProduct)
  {
    $legalProduct->load('category');

    $data = [
      'title' => 'Detail Produk Hukum',
      'main' => 'admin.content.legal_products.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.legal-product.index',
          'title' => 'Produk Hukum'
        ],
        [
          'title' => 'Detail'
        ],
      ],
      'legalProduct' => $legalProduct,
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(LegalProducts $legalProduct)
  {
    $data = [
      'title' => 'Edit Produk Hukum',
      'main' => 'admin.content.legal_products.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.legal-product.index',
          'title' => 'Produk Hukum'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'legalProduct' => $legalProduct,
      'categories' => LegalProductsCategories::all(),
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateLegalProductsRequest $request, LegalProducts $legalProduct)
  {
    try {
      $legalProduct->update($request->validated());

      return redirect()->route('admin.content.legal-product.index')
        ->with('success', 'Produk hukum berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(LegalProducts $legalProduct)
  {
    try {
      $legalProduct->delete();

      return redirect()->route('admin.content.legal-product.index')
        ->with('success', 'Produk hukum berhasil dihapus.');
    } catch (\Exception $e) {
      if ($e->getCode() == '23000') {
        return back()->with('error', 'Gagal menghapus data. Data ini mungkin terkait dengan data lain.');
      }
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
