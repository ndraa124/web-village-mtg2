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

  .ts-control {
    padding: 0.5rem 0.75rem !important;
    min-height: calc(1.5em + 1rem + 2px) !important;
  }

  .ts-wrapper.multi .ts-control>div {
    background: #0d6efd;
    color: #fff;
    border-radius: 0.25rem;
    padding: 2px 6px;
    margin: 3px 3px;
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
      <form action="{{ route('admin.services.update', $service) }}" method="POST">
        @csrf @method('PUT')

        <div class="row">
          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Nama Layanan <span class="text-danger">*</span></label>
              <div class="form-group">
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $service->title) }}" placeholder="Contoh: Surat Keterangan Usaha">
              </div>
              @error('title')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-20">
              <label class="label fs-16 mb-2">Class Ikon <span class="text-danger">*</span></label>
              <div class="form-group">
                <input type="text" id="icon_class" name="icon_class" class="form-control" value="{{ old('icon_class', $service->icon_class) }}" placeholder="Contoh: fas fa-handshake (Font Awesome)">
                <small class="form-text text-muted">Gunakan class Font Awesome 5. Cek di <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">fontawesome.com</a></small>
              </div>
              @error('icon_class')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Deskripsi Singkat <span class="text-danger">*</span></label>
              <div class="form-group">
                <textarea id="description" name="description" class="form-control" rows="3" placeholder="Deskripsi singkat layanan untuk tampilan kartu.">{{ old('description', $service->description) }}</textarea>
              </div>
              @error('description')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Persyaratan Layanan (Halaman Detail) <span class="text-danger">*</span></label>
              <div class="form-group">
                <textarea id="ckeditor-editor" name="requirements_content" class="form-control" rows="10">{{ old('requirements_content', $service->requirements_content) }}</textarea>
              </div>
              @error('requirements_content')
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
              <a href="{{ route('admin.services.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  ClassicEditor
    .create(document.querySelector('#ckeditor-editor'))
    .catch(error => {
      console.error(error);
    });
</script>
