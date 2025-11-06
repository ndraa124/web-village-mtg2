<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Str;

class ManageNewsController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = News::with('user', 'category');

    $query->when($search, function ($q, $search) {
      return $q->where('title', 'like', "%{$search}%");
    });

    $news = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Manajemen Berita',
      'main' => 'admin.news.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Berita'
        ],
      ],
      'news' => $news
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $categories = Category::orderBy('name')->get();
    $tags = Tag::orderBy('name')->get();

    $data = [
      'title' => 'Tambah Berita Baru',
      'main' => 'admin.news.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage-news.index',
          'title' => 'Berita'
        ],
        [
          'title' => 'Tambah Baru'
        ],
      ],
      'categories' => $categories,
      'tags' => $tags,
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreNewsRequest $request)
  {
    $validatedData = $request->validated();

    try {
      $validatedData['content'] = Purifier::clean($request->input('content'));

      if ($request->hasFile('image')) {
        $path = $request->file('image')->store('news_images', 'public');
        $validatedData['image'] = $path;
      }

      $validatedData['user_id'] = Auth::id();

      if ($validatedData['status'] == 'published' && empty($validatedData['published_at'])) {
        $validatedData['published_at'] = now();
      }

      $news = News::create($validatedData);

      if ($request->has('tags')) {
        $tagIds = [];

        foreach ($validatedData['tags'] as $tagInput) {
          if (is_numeric($tagInput)) {
            $tagIds[] = (int) $tagInput;
          } else {
            $newTag = Tag::firstOrCreate(
              ['name' => $tagInput],
              ['slug' => Str::slug($tagInput)]
            );
            $tagIds[] = $newTag->id;
          }
        }

        $news->tags()->attach($tagIds);
      }

      return redirect()->route('manage-news.index')
        ->with('success', 'Berita berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(News $manageNews)
  {
    $manageNews->load('user', 'category', 'tags');

    $data = [
      'title' => 'Detail Berita',
      'main' => 'admin.news.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage-news.index',
          'title' => 'Berita'
        ],
        [
          'title' => 'Detail'
        ],
      ],
      'news' => $manageNews
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(News $manageNews)
  {
    $categories = Category::orderBy('name')->get();
    $tags = Tag::orderBy('name')->get();

    $manageNews->load('tags');

    $data = [
      'title' => 'Edit Berita',
      'main' => 'admin.news.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'manage-news.index',
          'title' => 'Berita'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'news' => $manageNews,
      'categories' => $categories,
      'tags' => $tags,
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateNewsRequest $request, News $manageNews)
  {
    $validatedData = $request->validated();

    try {
      $validatedData['content'] = Purifier::clean($request->input('content'));

      if ($request->hasFile('image')) {
        if ($manageNews->image) {
          Storage::disk('public')->delete($manageNews->image);
        }

        $path = $request->file('image')->store('news_images', 'public');
        $validatedData['image'] = $path;
      }

      if ($validatedData['status'] == 'published' && is_null($manageNews->published_at)) {
        $validatedData['published_at'] = now();
      }

      if ($validatedData['status'] == 'draft') {
        $validatedData['published_at'] = null;
      }

      $manageNews->update($validatedData);

      if ($request->has('tags')) {
        $tagIds = [];

        foreach ($validatedData['tags'] as $tagInput) {
          if (is_numeric($tagInput)) {
            $tagIds[] = (int) $tagInput;
          } else {
            $newTag = Tag::firstOrCreate(
              ['name' => $tagInput],
              ['slug' => Str::slug($tagInput)]
            );
            $tagIds[] = $newTag->id;
          }
        }

        $manageNews->tags()->sync($tagIds);
      } else {
        $manageNews->tags()->detach();
      }

      return redirect()->route('manage-news.index')
        ->with('success', 'Berita berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(News $manageNews)
  {
    try {
      if ($manageNews->image) {
        Storage::disk('public')->delete($manageNews->image);
      }

      $manageNews->tags()->detach();
      $manageNews->delete();

      return redirect()->route('manage-news.index')
        ->with('success', 'Berita berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
