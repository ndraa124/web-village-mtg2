<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.structure.index') }}">Struktur Organisasi Pemerintah Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.deliberation.index') }}">Struktur Organisasi Badan Permusrawaratan Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#">Aparatur Desa</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="{{ route('admin.content.profile.organization.function-officials.index') }}">Tupoksi Aparatur Desa</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="vision-tab" tabindex="0">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
        <form action="{{ route('admin.content.profile.organization.officials.index') }}" method="GET" class="table-src-form position-relative m-0">
          <input type="text" name="search" class="form-control w-350" value="{{ request('search') }}" placeholder="Cari nama aparatur disini...">

          <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>

        <a href="{{ route('admin.content.profile.organization.officials.create') }}" class="text-primary fs-16 text-decoration-none">+ Tambah Baru</a>
      </div>

      @if ($message = Session::get('success'))
        <div class="col-12 p-20">
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
    </div>

    <div class="row">
      @forelse ($officials as $official)
        <div class="col-xxl-3 col-xxxl-4 col-lg-4 col-md-6">
          <div class="card bg-white p-20 rounded-10 border border-white mb-4 for-mobile-sellers">
            <div class="d-flex justify-content-between align-items-strat mb-3">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="{{ $official->image_url }}" style="width: 100px; height: 100px;" class="rounded-circle" alt="{{ $official->name }}">
                </div>
                <div class="flex-grow-1 ms-3 position-relative top-2">
                  <h3 class="mb-1">{{ $official->name }}</h3>
                  <spa class="fs-16">{{ $official->position->position_name ?? '-' }}</span>
                </div>
              </div>

              <div class="dropdown select-dropdown without-border" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="More">
                <button class="bg-transparent border-0 p-0 position-relative top-3 text-body" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-symbols-outlined fs-24 text-secondary">more_horiz</i>
                </button>

                <ul class="dropdown-menu dropdown-menu-end bg-white border-0 box-shadow rounded-10" data-simplebar>
                  <li>
                    <a href="{{ route('admin.content.profile.organization.officials.edit', $official->id) }}" class="dropdown-item text-secondary">Edit</a>
                  </li>
                  <li>
                    <form action="{{ route('admin.content.profile.organization.officials.destroy', $official->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                      @csrf @method('DELETE')
                      <button type="submit" class="dropdown-item text-secondary">Hapus</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      @empty
        <p class="text-center text-body">Data tidak ditemukan.</p>
      @endforelse
    </div>

    {!! $officials->links() !!}
  </div>
</div>
