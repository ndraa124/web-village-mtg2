<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
  public function index()
  {
    $query = News::with('user', 'category')
      ->where('status', 'published')
      ->latest('published_at');

    $featuredNews = $query->first();

    $news = News::with('user')
      ->where('status', 'published')
      ->where('id', '!=', $featuredNews->id ?? null)
      ->latest('published_at')
      ->paginate(6);

    $popularNews = News::where('status', 'published')
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
      'title' => 'Berita & Informasi',
      'main'  => 'main.news.index',
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Berita & Informasi',
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

    $relatedNews = News::with('user')
      ->where('status', 'published')
      ->where('id', '!=', $news->id)
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
      'main'  => 'main.news.detail',
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
