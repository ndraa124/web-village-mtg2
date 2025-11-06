<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Services;
use App\Models\Gallery;
use App\Models\VillagePotential;
use App\Models\Village;
use App\Models\InfographicsResident;
use App\Models\InfographicsApbd;

class HomeController extends Controller
{
    public function index()
    {
        $village = Village::where('is_active', true)->firstOrFail();

        $latestNews = News::where('status', 'published')
            ->latest('published_at')
            ->limit(3)
            ->get();

        $services = Services::orderBy('title', 'asc')
            ->limit(4)
            ->get();

        $potentials = VillagePotential::orderBy('id', 'asc')
            ->limit(3)
            ->get();

        $galleryImages = Gallery::latest()
            ->limit(8)
            ->get();

        $residentStats = InfographicsResident::latest()->first();

        $apbdStats = InfographicsApbd::latest('year')->first();

        $realizationStats = [
            'infrastructure' => 0,
            'education' => 0,
            'health' => 0,
        ];

        $data = [
            'title' => 'Home',
            'main'  => 'main.home.index',
            'village' => $village,
            'latestNews' => $latestNews,
            'services' => $services,
            'potentials' => $potentials,
            'galleryImages' => $galleryImages,
            'residentStats' => $residentStats,
            'apbdStats' => $apbdStats,
            'realizationStats' => $realizationStats,
        ];

        return view('main.layout.template', $data);
    }
}
