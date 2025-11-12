<style>
  .news-content h1,
  .news-content h2,
  .news-content h3 {
    margin-top: 1.5em;
    margin-bottom: 0.5em;
    font-weight: 600;
  }

  .news-content p {
    line-height: 1.7;
    margin-bottom: 1em;
  }

  .news-content blockquote {
    border-left: 4px solid #e2e8f0;
    padding-left: 1em;
    margin-left: 0;
    font-style: italic;
    color: #64748b;
  }

  .news-content ul,
  .news-content ol {
    padding-left: 2em;
    margin-bottom: 1em;
  }

  .news-content .btn {
    margin: 5px 0;
  }
</style>

<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">

      <div class="p-20">
        <h3 class="fw-bold mb-3">{{ $news->title }}</h3>

        <div class="d-flex gap-4 fs-14 text-secondary mb-3">
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">person</i>
            {{ $news->user->name ?? 'N/A' }}
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">calendar_month</i>
            Dibuat: {{ $news->created_at->format('d M Y') }}
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">publish</i>
            Publikasi: {{ $news->published_at?->format('d M Y') ?? 'Belum dipublikasi' }}
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">label</i>
            Status: {{ ucfirst($news->status) }}
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">folder</i>
            Kategori: {{ $news->category->name ?? '-' }}
          </span>
        </div>

        @if($news->tags->isNotEmpty())
        <div class="d-flex flex-wrap gap-2 fs-14 text-secondary mb-3 border-top pt-3">
          <span class="fw-medium">
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">sell</i>
            Tags:
          </span>
          @foreach($news->tags as $tag)
          <span class="badge bg-primary-light text-primary">{{ $tag->name }}</span>
          @endforeach
        </div>
        @endif

        <hr>

        @if($news->image)
        <div class="text-center mb-4">
          <img src="{{ $news->image_url }}" alt="Gambar Berita" class="img-fluid rounded-3" style="max-height: 400px; width: auto;">
        </div>
        @endif

        <div class="fs-16 text-body news-content" style="line-height: 1.7;">
          {!! $news->content !!}
        </div>

      </div>

      <div class="border-top p-20">
        <a href="{{ route('admin.content.news.index') }}" class="btn btn-danger fw-normal text-white">Kembali</a>
        <a href="{{ route('admin.content.news.edit', $news->id) }}" class="btn btn-warning fw-normal text-white">Edit</a>
      </div>

    </div>
  </div>
</div>