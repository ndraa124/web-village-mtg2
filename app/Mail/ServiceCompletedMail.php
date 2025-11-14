<?php

namespace App\Mail;

use App\Models\ServiceSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class ServiceCompletedMail extends Mailable implements ShouldQueue
{
  use Queueable, SerializesModels;

  public $submission;

  public function __construct(ServiceSubmission $submission)
  {
    $this->submission = $submission;
  }

  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Pengajuan Layanan Anda Telah Selesai: ' . $this->submission->service->title,
    );
  }

  public function content(): Content
  {
    return new Content(
      view: 'emails.service_completed',
      with: [
        'submission' => $this->submission,
      ]
    );
  }

  public function attachments(): array
  {
    if ($this->submission->final_document_path) {
      return [
        Attachment::fromStorageDisk('public', $this->submission->final_document_path)
          ->as('Hasil_Layanan_' . now()->format('Ymd') . '.pdf')
          ->withMime('application/pdf'),
      ];
    }

    return [];
  }
}
