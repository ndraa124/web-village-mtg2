<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\ServiceSubmission;
use App\Http\Requests\ServiceSubmission\StoreServiceSubmissionRequest;
use App\Http\Requests\ServiceSubmission\CheckSubmissionRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceNewSubmissionMail;
use App\Mail\ServiceConfirmationMail;

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

    if ($request->hasFile('supporting_files')) {
      foreach ($request->file('supporting_files') as $file) {
        $path = $file->store('submissions', 'public');
        $filePaths[] = $path;
      }
    }

    $submission = ServiceSubmission::create([
      'service_id' => $service->id,
      'nik' => $validatedData['nik'],
      'name' => $validatedData['name'],
      'email' => $validatedData['email'],
      'phone' => $validatedData['phone'] ?? null,
      'purpose' => $validatedData['purpose'],
      'supporting_files' => $filePaths,
      'status' => 'pending',
      'tracking_number' => '',
    ]);

    $tracking_number = sprintf('MTGPJ-%s-%04d', date('Ymd'), $submission->id);
    $submission->tracking_number = $tracking_number;
    $submission->save();

    try {
      $adminEmail = env('MAIL_USERNAME');
      Mail::to($adminEmail)->send(new ServiceNewSubmissionMail($submission));

      Mail::to($submission->email)->send(new ServiceConfirmationMail($submission));
    } catch (\Exception $e) {
      Log::error('Gagal mengirim email konfirmasi pengajuan: ' . $e->getMessage());
    }

    session()->flash('success', 'Pengajuan layanan Anda telah berhasil dikirim! Silakan tunggu notifikasi pemrosesan dari admin melalui email.');
    session()->flash('submission_tracking_number', $submission->tracking_number);
    session()->flash('submission_email', $submission->email);

    $url = route('service.submission.complete', $service->slug);
    $script = "<script>window.location.replace('$url');</script>";

    return response($script);
  }

  public function completeSubmission(Services $service)
  {
    if (!session()->has('submission_tracking_number')) {
      return redirect()->route('service.show', $service->slug);
    }

    $data = [
      'title' => 'Form Pengajuan ' . $service->title,
      'main'  => 'main.service.submission_complete',
      'header' => [
        'title' => 'Layanan Masyarakat',
        'description' => "Kami berkomitmen untuk menyediakan layanan administrasi dan kemasyarakatan yang cepat, transparan, dan efisien bagi seluruh warga Desa Motoling Dua",
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
      'submission_tracking_number' => session('submission_tracking_number'),
      'submission_email' => session('submission_email'),
    ];

    return view('main.layout.template', $data);
  }

  public function trackingSubmission()
  {
    $stats = [
      'total' => ServiceSubmission::count(),
      'pending' => ServiceSubmission::where('status', 'pending')->count(),
      'processing' => ServiceSubmission::whereIn('status', ['verified', 'processing'])->count(),
      'completed' => ServiceSubmission::where('status', 'completed')->count(),
    ];

    $data = [
      'title' => 'Tracking Layanan',
      'main'  => 'main.service.submission_tracking',
      'header' => [
        'title' => 'Lacak Pengajuan Anda',
        'description' => 'Pantau status dan progress pengajuan layanan desa secara real-time',
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
          'title' => 'Tracking Layanan',
        ]
      ],
      'stats' => $stats,
    ];

    return view('main.layout.template', $data);
  }

  public function trackingCheck(CheckSubmissionRequest $request)
  {
    $validatedData = $request->validated();

    $submission = ServiceSubmission::where('tracking_number', $validatedData['tracking_number'])->first();

    if ($submission) {
      return redirect()->route('service.submission.tracking.result', $submission->tracking_number);
    } else {
      return redirect()->back()
        ->with('error', 'Nomor tracking tidak ditemukan. Pastikan Anda memasukkan nomor dengan benar.')
        ->withInput();
    }
  }

  public function trackingResult(ServiceSubmission $submission)
  {
    $data = [
      'title' => 'Hasil Pencarian Pengajuan',
      'main'  => 'main.service.submission_tracking_result',
      'header' => [
        'title' => 'Hasil Pencarian Pengajuan',
        'description' => 'Detail lengkap status pengajuan layanan Anda',
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
          'title' => 'Hasil Pencarian Pengajuan',
        ]
      ],
      'submission' => $submission
    ];

    return view('main.layout.template', $data);
  }
}
