<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\NewsCategory\StoreNewsCategoryRequest;
use App\Http\Requests\NewsCategory\UpdateNewsCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Category::withCount('news');

    $query->when($search, function ($q, $search) {
      return $q->where('name', 'like', "%{$search}%");
    });

    $categories = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Manajemen Kategori Berita',
      'main' => 'admin.category.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kategori Berita'
        ],
      ],
      'categories' => $categories
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Kategori Baru',
      'main' => 'admin.category.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'master.category.index',
          'title' => 'Kategori Berita'
        ],
        [
          'title' => 'Tambah Baru'
        ],
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreNewsCategoryRequest $request)
  {
    try {
      Category::create($request->validated());

      return redirect()->route('master.category.index')
        ->with('success', 'Kategori berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Category $category)
  {
    $data = [
      'title' => 'Edit Kategori',
      'main' => 'admin.category.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'master.category.index',
          'title' => 'Kategori Berita'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'category' => $category
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateNewsCategoryRequest $request, Category $category)
  {
    try {
      $category->update($request->validated());

      return redirect()->route('master.category.index')
        ->with('success', 'Kategori berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(Category $category)
  {
    if ($category->news()->count() > 0) {
      return back()->with('error', 'Gagal menghapus! Kategori ini masih digunakan oleh ' . $category->news()->count() . ' berita.');
    }

    try {
      $category->delete();
      return redirect()->route('master.category.index')
        ->with('success', 'Kategori berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
