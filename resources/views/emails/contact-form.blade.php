<x-mail::message>
  # Pesan Baru dari Form Kontak Website

  Anda menerima pesan baru dari pengunjung website.

  ---

  **Nama Pengirim:**<br>
  {{ $formData['name'] }}

  **Email Pengirim:**<br>
  {{ $formData['email'] }}

  **Subjek:**<br>
  {{ $formData['subject'] }}

  **Isi Pesan:**<br>
  <x-mail::panel>
    {!! nl2br(e($formData['message'])) !!}
  </x-mail::panel>

  ---

  Terima kasih,<br>
  Sistem Website {{ config('app.name') }}
</x-mail::message>