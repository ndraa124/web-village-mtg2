<style>
  @import "https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.bootstrap5.css";

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
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

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
      <form action="{{ route('admin.content.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Judul Berita/Informasi</label>
              <div class="form-group">
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Masukkan judul berita atau informasi...">
              </div>
              @error('title')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-12">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Konten Berita/Informasi</label>
              <div class="form-group">
                <textarea id="ckeditor-editor" name="content" class="form-control" rows="10" placeholder="Masukkan konten berita atau informasi...">{{ old('content') }}</textarea>
              </div>
              @error('content')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Kategori</label>
              <div class="form-group">
                <select name="category_id" class="form-select form-control" aria-label="Kategori">
                  <option value="" selected>Pilih Kategori...</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                      {{ $category->name }}
                    </option>
                  @endforeach
                </select>
              </div>
              @error('category_id')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Tags (Opsional)</label>
              <div class="form-group">
                <select id="select-tags" name="tags[]" multiple placeholder="Pilih atau tambah tags..." autocomplete="off">
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'selected' : '' }}>
                      {{ $tag->name }}
                    </option>
                  @endforeach
                </select>
              </div>
              @error('tags')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Gambar Utama (Opsional)</label>
              <div class="form-group">
                <input type="file" name="image" class="form-control" onchange="previewImage(event)">
              </div>
              @error('image')
                <div class="text-danger small mt-2">
                  {{ $message }}
                </div>
              @enderror
              <img id="image-preview" src="https://placehold.co/400x200/e2e8f0/e2e8f0?text=Preview" alt="Image Preview" class="img-thumbnail mt-3" style="max-height: 200px;">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="mb-20">
              <label class="label fs-16 mb-2">Status</label>
              <div class="form-group">
                <select name="status" class="form-select form-control" aria-label="Status">
                  <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                  <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
              </div>
              @error('status')
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
              <button type="submit" class="btn btn-primary fw-normal text-white">Tambah</button>
              <a href="{{ route('admin.content.news.index') }}" class="btn btn-danger fw-normal text-white">Batal</a>
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

  document.addEventListener('DOMContentLoaded', function() {
    new TomSelect("#select-tags", {
      plugins: ['remove_button'],
      create: true,
      maxItems: 10
    });
  });
</script>
