<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceSubmission\RejectSubmissionRequest;
use App\Http\Requests\ServiceSubmission\CompleteSubmissionRequest;
use App\Mail\ServiceCompletedMail;
use App\Mail\ServiceRejectedMail;
use App\Models\ServiceSubmission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class ServiceSubmissionController extends Controller
{
  public function index()
  {
    $query = ServiceSubmission::with('service');

    if (request('status') && request('status') != 'all') {
      $query->where('status', request('status'));
    }

    $submissions = $query->orderByRaw("
        CASE status 
          WHEN 'pending' THEN 1 
          WHEN 'verified' THEN 2 
          WHEN 'processing' THEN 3 
          WHEN 'rejected' THEN 4 
          ELSE 5 
        END
      ")
      ->latest()
      ->paginate(10);

    $countNewSubmission = ServiceSubmission::where('status', 'pending')->count();

    $data = [
      'title' => 'Daftar Pengajuan Layanan',
      'main'  => 'admin.service_submission.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Pengajuan Layanan'
        ],
      ],
      'submissions' => $submissions,
      'stats' => [
        'newSubmission' => $countNewSubmission
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function show(ServiceSubmission $submission)
  {
    if ($submission->status === 'pending') {
      $submission->update([
        'status' => 'verified',
        'verified_at' => Carbon::now()
      ]);
    }

    $data = [
      'title' => 'Detail Pengajuan: ' . $submission->service->title,
      'main'  => 'admin.service_submission.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.services.submissions.index',
          'title' => 'Daftar Pengajuan Layanan'
        ],
        [
          'title' => 'Detail'
        ],
      ],
      'submission' => $submission,
    ];
    return view('admin.layout.template', $data);
  }

  public function process(ServiceSubmission $submission)
  {
    if ($submission->status === 'verified') {
      $submission->update([
        'status' => 'processing',
        'processing_at' => Carbon::now()
      ]);

      return redirect()->back()
        ->with('success', 'Status pengajuan telah diubah menjadi "Processing".');
    }

    return redirect()->back()
      ->with('error', 'Status tidak dapat diubah.');
  }

  public function complete(CompleteSubmissionRequest $request, ServiceSubmission $submission)
  {
    $validatedData = $request->validated();

    $path = $request->file('final_document')
      ->store('service-results', 'public');

    $submission->update([
      'status' => 'completed',
      'final_document_path' => $path,
      'admin_notes' => $validatedData['admin_notes'],
      'verified_at' => $submission->verified_at ?? Carbon::now(),
      'processing_at' => $submission->processing_at ?? Carbon::now(),
      'completed_at' => Carbon::now(),
      'rejection_reason' => null,
      'rejected_at' => null,
    ]);

    try {
      Mail::to($submission->email)->send(new ServiceCompletedMail($submission));
    } catch (\Exception $e) {
      Log::error('Gagal mengirim email: ' . $e->getMessage());
    }

    return redirect()->route('admin.services.submissions.index')
      ->with('success', 'Pengajuan berhasil diselesaikan. Notifikasi dan dokumen telah dikirimkan ke pengguna.');
  }

  public function reject(RejectSubmissionRequest $request, ServiceSubmission $submission)
  {
    $validatedData = $request->validated();

    $submission->update([
      'status' => 'rejected',
      'rejection_reason' => $validatedData['rejection_reason'],
      'rejected_at' => Carbon::now(),
      'completed_at' => null,
      'admin_notes' => null,
      'final_document_path' => null,
    ]);

    try {
      Mail::to($submission->email)->send(new ServiceRejectedMail($submission));
    } catch (\Exception $e) {
      Log::error('Gagal mengirim email: ' . $e->getMessage());
    }

    return redirect()->route('admin.services.submissions.index')
      ->with('success', 'Pengajuan berhasil ditolak. Notifikasi penolakan telah dikirimkan ke pengguna.');
  }

  public function destroy(ServiceSubmission $submission)
  {
    if ($submission->final_document_path) {
      Storage::disk('public')->delete($submission->final_document_path);
    }

    $submission->delete();

    return redirect()->route('admin.services.submissions.index')
      ->with('success', 'Pengajuan berhasil dihapus.');
  }
}
