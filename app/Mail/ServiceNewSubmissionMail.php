<?php

namespace App\Mail;

use App\Models\ServiceSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServiceNewSubmissionMail extends Mailable
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
      subject: 'Notifikasi: Pengajuan Layanan Baru - ' . $this->submission->service->title,
    );
  }

  public function content(): Content
  {
    return new Content(
      view: 'emails.new_submission_admin',
      with: [
        'submission' => $this->submission,
      ]
    );
  }

  public function attachments(): array
  {
    return [];
  }
}
