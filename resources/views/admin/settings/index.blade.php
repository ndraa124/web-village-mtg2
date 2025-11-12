<div class="card bg-white border border-white rounded-10 p-20 mb-4">
  <div class="mb-20">
    <h3 class="mb-1 fs-22">Profil Desa</h3>
    <p class="fs-16 lh-1-8">Edit informasi tentang desa anda disini.</p>
  </div>

  @if ($message = Session::get('success'))
  <div class="col-12">
    <div class="alert fs-16 alert-success alert-dismissible" role="alert">
      {{ $message }}
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif

  @if ($message = Session::get('error'))
  <div class="col-12">
    <div class="alert fs-16 alert-danger alert-dismissible" role="alert">
      {{ $message }}
      <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif

  <form action="{{ route('admin.settings.update', $village->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Nama Desa</label>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $village->name ?? '') }}" placeholder="Nama Desa">
          </div>
          @error('name')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Kepala Desa</label>
          <div class="form-group">
            <input type="text" class="form-control" id="village_head" name="village_head" value="{{ old('village_head', $village->village_head ?? '') }}" placeholder="Kepala Desa">
          </div>
          @error('village_head')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Alamat Email</label>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $village->email ?? '') }}" placeholder="Alamat Email">
          </div>
          @error('email')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Nomor Telepon</label>
          <div class="form-group">
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $village->phone ?? '') }}" placeholder="Nomor Telepon">
          </div>
          @error('phone')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Alamat Lengkap</label>
          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $village->address ?? '') }}" placeholder="Alamat Lengkap">
          </div>
          @error('address')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Kecamatan</label>
          <div class="form-group">
            <input type="text" class="form-control" id="subdistrict" name="subdistrict" value="{{ old('subdistrict', $village->subdistrict ?? '') }}" placeholder="Kecamatan">
          </div>
          @error('subdistrict')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Kabupaten/Kota</label>
          <div class="form-group">
            <input type="text" class="form-control" id="regency" name="regency" value="{{ old('regency', $village->regency ?? '') }}" placeholder="Kabupaten/Kota">
          </div>
          @error('regency')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Provinsi</label>
          <div class="form-group">
            <input type="text" class="form-control" id="province" name="province" value="{{ old('province', $village->province ?? '') }}" placeholder="Provinsi">
          </div>
          @error('province')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Deskripsi Desa</label>
          <div class="form-group">
            <textarea class="form-control" placeholder="Tulis deskripsi di sini...." id="description" name="description" style="height: 152px">{{ old('description', $village->description ?? '') }}</textarea>
          </div>
          @error('description')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12 mt-4">
        <div class="mb-20">
          <h3 class="fs-22">Jam Operasional</h3>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Hari Kerja (Senin-Jumat)</label>
          <div class="form-group">
            <input type="text" class="form-control" id="operational_hours_weekdays" name="operational_hours_weekdays" value="{{ old('operational_hours_weekdays', $village->operational_hours_weekdays ?? '') }}" placeholder="Contoh: 08:00 - 16:00">
          </div>
          @error('operational_hours_weekdays')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-6">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Akhir Pekan (Sabtu-Minggu)</label>
          <div class="form-group">
            <input type="text" class="form-control" id="operational_hours_weekends" name="operational_hours_weekends" value="{{ old('operational_hours_weekends', $village->operational_hours_weekends ?? '') }}" placeholder="Contoh: Tutup">
          </div>
          @error('operational_hours_weekends')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12 mt-4">
        <div class="mb-20">
          <h3 class="mb-1 fs-22">Logo Desa</h3>
          <p class="fs-16 lh-1-8">Logo ini akan ditampilkan di profil desa.</p>
        </div>
      </div>

      @if ($village && $village->logo)
      <div class="col-lg-12 mb-20">
        <label class="label fs-16 mb-2">Logo Saat Ini:</label><br>
        <img src="{{ asset('storage/' . $village->logo) }}" alt="Logo Desa" class="img-thumbnail"
          width="200">
        <p class="mt-2 fs-14 text-muted">Abaikan form upload jika tidak ingin mengganti logo.</p>
      </div>
      @endif

      <div class="col-lg-12">
        <div class="form-group mb-4 only-file-upload" id="file-upload">
          <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
            <div class="product-upload">
              <label class="file-upload mb-0">
                <i class="ri-folder-image-line bg-primary bg-opacity-10 p-2 rounded-1 text-primary"></i>
                <span class="d-block text-body fs-14">
                  Seret dan lepas gambar atau
                  <span class="text-primary text-decoration-underline">Cari</span>
                </span>
              </label>
              <label class="position-absolute top-0 bottom-0 start-0 end-0 cursor" id="upload-container">
                <input class="form__file bottom-0" id="upload-files" type="file" name="logo">
                {{-- Ganti name="logo" sesuai model --}}
              </label>
            </div>
          </div>
          <div id="files-list-container"></div>
        </div>
      </div>

      <div class="col-lg-12 mt-4">
        <div class="mb-20">
          <h3 class="fs-22">Pengaturan Peta</h3>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Latitude</label>
          <div class="form-group">
            <input type="text" class="form-control" id="map_latitude" name="map_latitude" value="{{ old('map_latitude', $village->map_latitude ?? '') }}" placeholder="Latitude Peta">
          </div>
          @error('map_latitude')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Longitude</label>
          <div class="form-group">
            <input type="text" class="form-control" id="map_longitude" name="map_longitude" value="{{ old('map_longitude', $village->map_longitude ?? '') }}" placeholder="Longitude Peta">
          </div>
          @error('map_longitude')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-4">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Zoom Level</label>
          <div class="form-group">
            <input type="number" class="form-control" id="map_zoom" name="map_zoom" value="{{ old('map_zoom', $village->map_zoom ?? '') }}" placeholder="Contoh: 15">
          </div>
          @error('map_zoom')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12 mt-4">
        <div class="mb-20">
          <h3 class="fs-22">Profil Sosial Media</h3>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Facebook</label>
          <div class="form-group">
            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $village->facebook ?? '') }}" placeholder="Link Facebook">
          </div>
          @error('facebook')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Twitter</label>
          <div class="form-group">
            <input type="text" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $village->twitter ?? '') }}" placeholder="Link Twitter">
          </div>
          @error('twitter')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-20">
          <label class="label fs-16 mb-2">Instagram</label>
          <div class="form-group">
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $village->instagram ?? '') }}" placeholder="Link Instagram">
          </div>
          @error('instagram')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-3">
        <div class="mb-20">
          <label class="label fs-16 mb-2">YouTube</label>
          <div class="form-group">
            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $village->youtube ?? '') }}" placeholder="Link YouTube">
          </div>
          @error('youtube')
          <div class="text-danger small mt-2">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>

      <div class="col-lg-12">
        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-primary fw-normal text-white">Simpan Profil</button>
          <a href="{{ route('admin.dashboard') }}" class="btn btn-danger fw-normal text-white">Batal</a>
        </div>
      </div>
    </div>
  </form>
</div>