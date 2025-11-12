<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Str;

class NewsController extends Controller
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
      'title' => 'Manajemen Berita & Informasi',
      'main' => 'admin.content.news.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Berita & Informasi'
        ],
      ],
      'news' => $news
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $categories = NewsCategory::orderBy('name')->get();
    $tags = Tag::orderBy('name')->get();

    $data = [
      'title' => 'Tambah Berita & Informasi Baru',
      'main' => 'admin.content.news.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.news.index',
          'title' => 'Berita & Informasi'
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

      return redirect()->route('admin.content.news.index')
        ->with('success', 'Berita berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(News $news)
  {
    $news->load('user', 'category', 'tags');

    $data = [
      'title' => 'Detail Berita & Informasi',
      'main' => 'admin.content.news.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.news.index',
          'title' => 'Berita & Informasi'
        ],
        [
          'title' => 'Detail'
        ],
      ],
      'news' => $news
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(News $news)
  {
    $categories = NewsCategory::orderBy('name')->get();
    $tags = Tag::orderBy('name')->get();

    $news->load('tags');

    $data = [
      'title' => 'Edit Berita & Informasi',
      'main' => 'admin.content.news.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.news.index',
          'title' => 'Berita & Informasi'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'news' => $news,
      'categories' => $categories,
      'tags' => $tags,
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateNewsRequest $request, News $news)
  {
    $validatedData = $request->validated();

    try {
      $validatedData['content'] = Purifier::clean($request->input('content'));

      if ($request->hasFile('image')) {
        if ($news->image) {
          Storage::disk('public')->delete($news->image);
        }

        $path = $request->file('image')->store('news_images', 'public');
        $validatedData['image'] = $path;
      }

      if ($validatedData['status'] == 'published' && is_null($news->published_at)) {
        $validatedData['published_at'] = now();
      }

      if ($validatedData['status'] == 'draft') {
        $validatedData['published_at'] = null;
      }

      $news->update($validatedData);

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

        $news->tags()->sync($tagIds);
      } else {
        $news->tags()->detach();
      }

      return redirect()->route('admin.content.news.index')
        ->with('success', 'Berita berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(News $news)
  {
    try {
      if ($news->image) {
        Storage::disk('public')->delete($news->image);
      }

      $news->tags()->detach();
      $news->delete();

      return redirect()->route('admin.content.news.index')
        ->with('success', 'Berita berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
