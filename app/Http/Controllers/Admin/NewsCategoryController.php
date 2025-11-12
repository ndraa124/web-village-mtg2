<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use App\Http\Requests\Master\NewsCategory\StoreNewsCategoryRequest;
use App\Http\Requests\Master\NewsCategory\UpdateNewsCategoryRequest;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = NewsCategory::withCount('news');

    $query->when($search, function ($q, $search) {
      return $q->where('name', 'like', "%{$search}%");
    });

    $categories = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Manajemen Kategori Berita',
      'main' => 'admin.master.news_category.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
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
      'main' => 'admin.master.news_category.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.master.news-category.index',
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
      NewsCategory::create($request->validated());

      return redirect()->route('admin.master.news-category.index')
        ->with('success', 'Kategori berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(NewsCategory $category)
  {
    $data = [
      'title' => 'Edit Kategori',
      'main' => 'admin.master.news_category.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.master.news-category.index',
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

  public function update(UpdateNewsCategoryRequest $request, NewsCategory $category)
  {
    try {
      $category->update($request->validated());

      return redirect()->route('admin.master.news-category.index')
        ->with('success', 'Kategori berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(NewsCategory $category)
  {
    if ($category->news()->count() > 0) {
      return back()->with('error', 'Gagal menghapus! Kategori ini masih digunakan oleh ' . $category->news()->count() . ' berita.');
    }

    try {
      $category->delete();
      return redirect()->route('admin.master.news-category.index')
        ->with('success', 'Kategori berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
