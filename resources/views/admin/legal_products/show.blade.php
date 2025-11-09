<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Judul Produk Hukum</span>
          <span class="fw-bold">{{ $legalProduct->title }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Kategori</span>
          <span class="fw-bold">{{ $legalProduct->category->name ?? 'N/A' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Tahun</span>
          <span class="fw-bold">{{ $legalProduct->year }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Link / Tautan</span>
          <span class="fw-bold">
            @if ($legalProduct->link)
            <a href="{{ $legalProduct->link }}" target="_blank" rel="noopener noreferrer">
              Lihat Dokumen
            </a>
            @else
            <span class="text-secondary fst-italic">Tidak ada link</span>
            @endif
          </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $legalProduct->created_at?->format('d M Y, H:i') ?? 'N/A' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $legalProduct->updated_at?->format('d M Y, H:i') ?? 'N/A' }}</span>
        </li>
      </ul>

      <div class="p-20">
        <a href="{{ route('manage-legal-product.index') }}" class="btn btn-secondary fw-normal text-white">Kembali</a>
      </div>
    </div>
  </div>
</div>