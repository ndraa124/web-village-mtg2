<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
  .content-body h1,
  .content-body h2,
  .content-body h3 {
    margin-top: 1.5em;
    margin-bottom: 0.5em;
    font-weight: 600;
  }

  .content-body p {
    line-height: 1.7;
    margin-bottom: 1em;
  }

  .content-body ul,
  .content-body ol {
    padding-left: 2em;
    margin-bottom: 1em;
  }
</style>

<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">

      <div class="p-20">
        <div class="d-flex align-items-center gap-3 mb-4 border-bottom pb-3">
          @if ($function->icon_class)
            <div class="bg-primary-light rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
              <i class="{{ $function->icon_class }}"></i>
            </div>
          @endif

          <div>
            <h3 class="fw-bold mb-1">{{ $function->position_name }}</h3>
            <span class="text-secondary fs-14">Dibuat pada: {{ $function->created_at->format('d M Y') }}</span>
          </div>
        </div>

        <div class="fs-16 text-body content-body" style="line-height: 1.7;">
          {!! $function->description !!}
        </div>
      </div>

      <div class="border-top p-20">
        <a href="{{ route('admin.content.profile.organization.function-officials.index') }}" class="btn btn-danger fw-normal text-white">Kembali</a>
        <a href="{{ route('admin.content.profile.organization.function-officials.edit', $function->id) }}" class="btn btn-warning fw-normal text-white">Edit</a>
      </div>
    </div>
  </div>
</div>
