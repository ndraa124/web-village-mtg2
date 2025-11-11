<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
  public function index(Request $request, ?Category $category = null, ?Tag $tag = null)
  {
    $pageTitle = 'Berita & Informasi';

    $search = $request->input('search');
    $year = $request->input('year');
    $month = $request->input('month');

    if ($category) {
      $pageTitle = 'Kategori Berita: ' . $category->name;
    }

    if ($tag) {
      $pageTitle = 'Tag Berita: ' . $tag->name;
    }

    if ($search) {
      $pageTitle = 'Hasil Pencarian: ' . $search;
    }

    if ($year && $month) {
      $monthName = Carbon::create()->month((int) $month)->locale('id')->isoFormat('MMMM');
      $pageTitle = "Arsip Berita: $monthName $year";
    }

    $query = News::with('user', 'category')
      ->where('status', 'published')
      ->when($category, fn($q) => $q->where('category_id', $category->id))
      ->when($tag, fn($q) => $q->whereHas('tags', fn($subQ) => $subQ->where('tags.id', $tag->id)))
      ->when($search, fn($q) => $q->where('title', 'like', "%{$search}%"))
      ->when($year, fn($q) => $q->whereYear('published_at', $year))
      ->when($month, fn($q) => $q->whereMonth('published_at', $month));

    $featuredNews = (clone $query)
      ->whereDoesntHave('category', function ($subQ) {
        $subQ->where('name', 'Informasi');
      })
      ->latest('published_at')
      ->first();

    $news = $query
      ->when($featuredNews, fn($q) => $q->where('id', '!=', $featuredNews->id))
      ->latest('published_at')
      ->paginate(6)
      ->appends($request->query());

    $popularNews = News::where('status', 'published')
      ->whereDoesntHave('category', function ($subQ) {
        $subQ->where('name', 'Informasi');
      })
      ->orderBy('views_count', 'desc')
      ->limit(5)
      ->get();

    $categories = Category::withCount(['news' => fn($q) => $q->where('status', 'published')])
      ->orderBy('news_count', 'desc')
      ->get();

    $archives = News::where('status', 'published')
      ->selectRaw('YEAR(published_at) as year, MONTHNAME(published_at) as month_name, MONTH(published_at) as month_num, COUNT(*) as post_count')
      ->groupBy('year', 'month_name', 'month_num')
      ->orderBy('year', 'desc')
      ->orderBy('month_num', 'desc')
      ->get();

    $popularTags = Tag::withCount(['news' => fn($q) => $q->where('status', 'published')])
      ->having('news_count', '>', 0)
      ->orderBy('news_count', 'desc')
      ->limit(10)
      ->get();

    $data = [
      'title' => $pageTitle,
      'main'  => 'main.news.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => $pageTitle,
        ]
      ],
      'featuredNews'  => $featuredNews,
      'news' => $news,
      'popularNews' => $popularNews,
      'categories' => $categories,
      'archives' => $archives,
      'popularTags' => $popularTags,
    ];

    return view('main.layout.template', $data);
  }

  public function show(News $news)
  {
    if ($news->status !== 'published' && !$news->published_at) {
      abort(404);
    }

    $news->increment('views_count');
    $news->load('user', 'category', 'tags');

    $relatedNews = News::with('user')
      ->where('status', 'published')
      ->where('id', '!=', $news->id)
      ->where('category_id', $news->category_id)
      ->latest('published_at')
      ->limit(2)
      ->get();

    $latestNewsSidebar = News::where('status', 'published')
      ->where('id', '!=', $news->id)
      ->latest('published_at')
      ->limit(5)
      ->get();

    $data = [
      'title' => 'Detail Berita',
      'main'  => 'main.news.show',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'route' => 'news.index',
          'title' => 'Berita & Informasi',
        ],
        [
          'title' => 'Detail Berita',
        ]
      ],
      'news' => $news,
      'relatedNews' => $relatedNews,
      'latestNewsSidebar' => $latestNewsSidebar,
    ];

    return view('main.layout.template', $data);
  }
}
