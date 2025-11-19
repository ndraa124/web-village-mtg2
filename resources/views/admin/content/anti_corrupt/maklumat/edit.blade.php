<style>
  .card .ck-editor__editable_inline {
    min-height: 300px;
    background: #ffffff !important;
    padding: 1rem 2rem 1rem 2rem;
  }

  .card .ck-content,
  .card .ck-content * {
    color: #000000 !important;
    background-color: #ffffff !important;
  }
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<div class="row">
  <div class="col-lg-12">
    @if ($message = Session::get('error'))
      <div class="col-12">
        <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
          {{ $message }}
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endif

    <div class="card bg-white p-20 rounded-10 border border-white mb-4">
      <div class="d-flex gap-4 fs-14 text-secondary mb-2">
        <span>
          <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">person</i>
          {{ $maklumat->user->name ?? 'N/A' }}
        </span>
        <span>
          <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">calendar_month</i>
          Dibuat: {{ $maklumat->created_at->format('d M Y') }}
        </span>
      </div>

      <hr>

      <form action="{{ route('admin.content.anti.maklumat.update', $maklumat->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Gambar Saat Ini</label>
              <div>
                <img src="{{ $maklumat->image_url }}" alt="{{ $maklumat->caption ?? 'Current Image' }}" id="image-preview" style="width: 200px; height: auto; object-fit: cover; border-radius: 8px;">
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Unggah Gambar Baru</label>
              <div class="form-group">
                <input type="file" name="image" class="form-control" accept="image/jpeg,image/png,image/jpg,image/webp" onchange="previewImage(event)">
                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
              </div>
              @error('image')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Konten Maklumat</label>
              <div class="form-group">
                <textarea id="ckeditor-editor" name="content" class="form-control" rows="10" placeholder="Masukkan konten...">{{ old('content', $maklumat->content) }}</textarea>
              </div>
              @error('content')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Ubah</button>
              <a href="{{ route('admin.content.anti.maklumat.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  ClassicEditor
    .create(document.querySelector('#ckeditor-editor'), {
      toolbar: {
        items: [
          'undo', 'redo',
          '|', 'heading',
          '|', 'bold', 'italic',
          '|', 'link', 'uploadImage', 'insertTable', 'blockQuote',
          '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
        ]
      },
    })
    .then(editor => {
      console.log('Editor CKEditor 5 berhasil dimuat', editor);
    })
    .catch(error => {
      console.error('Error saat memuat CKEditor 5:', error);
    });
</script>
