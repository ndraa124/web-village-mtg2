<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">

      <div class="text-center p-20 border-bottom">
        <img src="{{ $slider->image_url }}" alt="{{ $slider->title }}"
          style="max-width: 100%; height: auto; max-height: 300px; border-radius: 8px;">
      </div>

      <ul class="ps-0 mb-0 list-unstyled">
        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Status</span>
          <span class="fw-bold">
            @if ($slider->is_active)
            <span class="badge bg-success fs-14">Aktif</span>
            @else
            <span class="badge bg-secondary fs-14">Tidak Aktif</span>
            @endif
          </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Judul Slider</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $slider->title }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Subtitle</span>
          <span class="fw-bold text-end" style="max-width: 70%;">{{ $slider->subtitle ?? '-' }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Dibuat Pada</span>
          <span class="fw-bold">{{ $slider->created_at->format('d M Y, H:i') }}</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center p-20">
          <span class="text-secondary fw-medium">Diperbarui Pada</span>
          <span class="fw-bold">{{ $slider->updated_at->format('d M Y, H:i') }}</span>
        </li>
      </ul>

      <div class="p-20 border-top">
        <a href="{{ route('slider.index') }}" class="btn btn-secondary fw-normal">Kembali</a>
      </div>
    </div>
  </div>
</div>