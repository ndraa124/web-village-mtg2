<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Mail\ContactFormMail;

use App\Models\Slider;
use App\Models\News;
use App\Models\Services;
use App\Models\Gallery;
use App\Models\VillagePotential;
use App\Models\Village;
use App\Models\InfographicsResident;
use App\Models\InfographicsApbd;
use App\Models\InfographicsApbdDevRealization;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)->get();

        $village = Village::where('is_active', true)->firstOrFail();

        $latestNews = News::where('status', 'published')
            ->whereDoesntHave('category', function ($query) {
                $query->where('name', 'Informasi');
            })
            ->latest('published_at')
            ->limit(3)
            ->get();

        $informationNews = News::where('status', 'published')
            ->whereHas('category', function ($query) {
                $query->where('name', 'Informasi');
            })
            ->latest('published_at')
            ->limit(5)
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

        $realizationStats = InfographicsApbdDevRealization::latest('year')
            ->limit(3)
            ->get();

        $data = [
            'title' => 'Home',
            'main'  => 'main.home.index',
            'sliders' => $sliders,
            'village' => $village,
            'latestNews' => $latestNews,
            'informationNews' => $informationNews,
            'services' => $services,
            'potentials' => $potentials,
            'galleryImages' => $galleryImages,
            'residentStats' => $residentStats,
            'apbdStats' => $apbdStats,
            'realizationStats' => $realizationStats,
        ];

        return view('main.layout.template', $data);
    }

    public function sendContactEmail(StoreContactRequest $request)
    {
        $validatedData = $request->validated();
        $recipientEmail = env('MAIL_USERNAME');

        try {
            Mail::to($recipientEmail)->send(new ContactFormMail($validatedData));
        } catch (\Exception $e) {
            dd($e->getMessage());

            return redirect(url()->previous() . '#kontak')
                ->with('error', 'Terjadi kesalahan. Pesan Anda tidak dapat dikirim.')
                ->withInput();
        }

        return redirect(url()->previous() . '#kontak')
            ->with('success', 'Pesan Anda telah berhasil terkirim!');
    }
}
