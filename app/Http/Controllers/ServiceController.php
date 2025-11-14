<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\ServiceSubmission;
use App\Http\Requests\ServiceSubmission\StoreServiceSubmissionRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceNewSubmissionMail;

class ServiceController extends Controller
{
  public function index()
  {
    $services = Services::orderBy('title', 'asc')->get();

    $data = [
      'title' => 'Layanan Masyarakat',
      'main'  => 'main.service.index',
      'header' => [
        'title' => 'Layanan Masyarakat',
        'description' => 'Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien bagi seluruh warga Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'title' => 'Layanan Masyarakat',
        ]
      ],
      'services' => $services,
    ];

    return view('main.layout.template', $data);
  }

  public function show(Services $service)
  {
    $data = [
      'title' => $service->title,
      'main'  => 'main.service.show',
      'header' => [
        'title' => 'Layanan Masyarakat',
        'description' => 'Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien bagi seluruh warga Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'route' => 'service.index',
          'title' => 'Layanan Masyarakat',
        ],
        [
          'title' => $service->title,
        ]
      ],
      'service' => $service,
    ];

    return view('main.layout.template', $data);
  }

  public function createSubmission(Services $service)
  {
    $data = [
      'title' => 'Form Pengajuan: ' . $service->title,
      'main'  => 'main.service.submission_form',
      'header' => [
        'title' => 'Layanan Masyarakat',
        'description' => 'Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien bagi seluruh warga Desa Motoling Dua',
      ],
      'breadcrumbs' => [
        [
          'route' => 'home',
          'title' => 'Beranda',
        ],
        [
          'route' => 'service.index',
          'title' => 'Layanan Masyarakat',
        ],
        [
          'title' => $service->title,
        ]
      ],
      'service' => $service,
    ];

    return view('main.layout.template', $data);
  }

  public function storeSubmission(StoreServiceSubmissionRequest $request, Services $service)
  {
    $validatedData = $request->validated();
    $filePaths = [];

    // 1. Proses unggah file pendukung
    if ($request->hasFile('supporting_files')) {
      foreach ($request->file('supporting_files') as $file) {
        // Simpan file di storage/app/public/submissions
        $path = $file->store('submissions', 'public');
        $filePaths[] = $path;
      }
    }

    // 2. Simpan pengajuan ke database
    $submission = ServiceSubmission::create([
      'service_id' => $service->id,
      'name' => $validatedData['name'],
      'email' => $validatedData['email'],
      'phone' => $validatedData['phone'] ?? null,
      'user_description' => $validatedData['user_description'],
      'supporting_files' => $filePaths, // Simpan array path file
      'status' => 'pending', // Status awal
    ]);

    // 3. Kirim notifikasi email ke admin (Alur 4)
    try {
      // Asumsi email admin adalah env('MAIL_USERNAME')
      $adminEmail = env('MAIL_USERNAME');
      Mail::to($adminEmail)->send(new ServiceNewSubmissionMail($submission));
    } catch (\Exception $e) {
      // Opsional: log error jika pengiriman email gagal
    }

    return redirect()->route('service.show', $service->slug)
      ->with('success', 'Pengajuan layanan Anda telah berhasil dikirim! Silakan tunggu notifikasi pemrosesan dari admin melalui email.');
  }
}
