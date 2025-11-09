@if ($paginator->hasPages())
<div class="p-0">
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex flex-wrap items-center justify-center gap-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        {{-- Tombol 'Previous' non-aktif --}}
        <span class="px-3 py-2 bg-gray-200 text-gray-400 rounded cursor-not-allowed">
            <i class="fas fa-chevron-left"></i>
        </span>
        @else
        {{-- Tombol 'Previous' aktif --}}
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300 transition">
            <i class="fas fa-chevron-left"></i>
        </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <span class="px-3 py-2 text-gray-500">{{ $element }}</span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        {{-- Tombol Halaman Aktif --}}
        <span aria-current="page" class="px-4 py-2 bg-red-600 text-white rounded font-semibold">{{ $page }}</span>
        @else
        {{-- Tombol Halaman non-aktif --}}
        <a href="{{ $url }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
            {{ $page }}
        </a>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        {{-- Tombol 'Next' aktif --}}
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-2 bg-gray-200 text-gray-600 rounded hover:bg-gray-300 transition">
            <i class="fas fa-chevron-right"></i>
        </a>
        @else
        {{-- Tombol 'Next' non-aktif --}}
        <span class="px-3 py-2 bg-gray-200 text-gray-400 rounded cursor-not-allowed">
            <i class="fas fa-chevron-right"></i>
        </span>
        @endif
    </nav>
</div>
@endif