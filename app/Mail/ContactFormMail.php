<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormMail extends Mailable
{
  use Queueable, SerializesModels;

  // Properti untuk menyimpan data dari form
  public $formData;

  /**
   * Create a new message instance.
   *
   * @param array $formData
   */
  public function __construct(array $formData)
  {
    $this->formData = $formData;
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    // Set subjek email dan alamat email "From"
    return new Envelope(
      from: new Address($this->formData['email'], $this->formData['name']),
      subject: 'Kontak Form: ' . $this->formData['subject'],
    );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    // Menggunakan template markdown
    // Data di $this->formData akan otomatis tersedia di view
    return new Content(
      markdown: 'emails.contact-form',
    );
  }

  /**
   * Get the attachments for the message.
   *
   * @return array<int, \Illuminate\Mail\Mailables\Attachment>
   */
  public function attachments(): array
  {
    return [];
  }
}
