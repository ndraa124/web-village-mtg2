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

  .news-content table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1em;
    border: 1px solid #dee2e6;
  }

  .news-content th,
  .news-content td {
    border: 1px solid #dee2e6;
    padding: 0.75rem;
    vertical-align: top;
    text-align: left;
  }

  .news-content th {
    background-color: #f8f9fa;
    font-weight: 600;
  }
</style>

<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white rounded-10 border border-white mb-4">

      <div class="p-20">
        <div class="d-flex gap-4 fs-14 text-secondary mb-3">
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">person</i>
            {{ $antiCorrupt->user->name ?? 'N/A' }}
          </span>
          <span>
            <i class="material-symbols-outlined fs-16" style="vertical-align: middle; margin-top: -3px;">calendar_month</i>
            Dibuat: {{ $antiCorrupt->created_at->format('d M Y') }}
          </span>
        </div>

        <hr>

        <div class="fs-16 text-body news-content" style="line-height: 1.7;">
          @if ($antiCorrupt->content == '')
            Tidak ada konten
          @else
            {!! $antiCorrupt->content !!}
          @endif
        </div>
      </div>

      <div class="border-top p-20">
        <a href="{{ route('admin.content.anti.governance.edit', $antiCorrupt->id) }}" class="btn btn-warning fw-normal text-white">Edit</a>
      </div>

    </div>
  </div>
</div>
