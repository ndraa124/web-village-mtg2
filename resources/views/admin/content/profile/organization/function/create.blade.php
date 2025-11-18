{{-- Style untuk CKEditor --}}
<style>
  .card .ck-editor__editable_inline {
    min-height: 300px;
    background: #ffffff !important;
  }

  .card .ck-content,
  .card .ck-content * {
    color: #212529 !important;
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
      <form action="{{ route('admin.content.profile.organization.function-officials.store') }}" method="POST">
        @csrf

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Jabatan <span class="text-danger">*</span></label>
              <div class="form-group">
                <input type="text" name="position_name" class="form-control" value="{{ old('position_name') }}" placeholder="Contoh: Kepala Desa" required>
              </div>
              @error('position_name')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Class Ikon</label>
              <div class="form-group">
                <input type="text" name="icon_class" class="form-control" value="{{ old('icon_class') }}" placeholder="Contoh: fas fa-handshake (Font Awesome)">
                <small class="form-text text-muted">Gunakan class Font Awesome 5. Cek di <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">fontawesome.com</a></small>
              </div>
              @error('icon_class')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Deskripsi Tugas & Fungsi <span class="text-danger">*</span></label>
              <div class="form-group">
                <textarea id="ckeditor-editor" name="description" class="form-control" rows="10" placeholder="Tuliskan rincian tugas dan fungsi...">{{ old('description') }}</textarea>
              </div>
              @error('description')
                <div class="text-danger small mt-2">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary fw-normal text-white">Simpan</button>
              <a href="{{ route('admin.content.profile.organization.function-officials.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
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
        items: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', '|', 'bulletedList', 'numberedList', 'outdent', 'indent']
      },
    })
    .catch(error => {
      console.error(error);
    });
</script>
