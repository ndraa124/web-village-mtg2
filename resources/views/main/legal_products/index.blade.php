<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    <div class="bg-white rounded-3xl shadow-xl p-8 mb-8">
      <form action="{{ route('legal-products.index') }}" method="GET">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-end">
          <div>
            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
            <select id="category" name="category" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 p-3">
              <option value="">Semua Kategori</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ ($filters['category'] ?? null) == $category->id ? 'selected' : '' }}>
                  {{ $category->name }}
                </option>
              @endforeach
            </select>
          </div>

          <div>
            <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
            <input type="number" id="year" name="year" placeholder="Contoh: 2024" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500 p-3" value="{{ $filters['year'] ?? '' }}">
          </div>

          <div class="md:text-right">
            <button type="submit" class="w-full md:w-auto bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold py-3 px-6 rounded-2xl shadow-md hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
              <i class="fas fa-search mr-1"></i> Cari
            </button>
            <a href="{{ route('legal-products.index') }}" class="w-full md:w-auto inline-block text-center mt-2 md:mt-0 md:ml-2 bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-2xl shadow-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300">
              Reset
            </a>
          </div>
        </div>
      </form>
    </div>

    <div class="bg-white rounded-3xl shadow-xl p-8">
      <div class="overflow-x-auto">
        <table class="w-full table-auto min-w-full">
          <thead>
            <tr class="bg-gradient-to-r from-red-600 to-red-700 text-white">
              <th class="px-4 py-3 text-left w-16 rounded-tl-xl">No.</th>
              <th class="px-4 py-3 text-left">Judul Produk Hukum</th>
              <th class="px-4 py-3 text-left">Kategori</th>
              <th class="px-4 py-3 text-center w-24">Tahun</th>
              <th class="px-4 py-3 text-center w-40 rounded-tr-xl">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($legalProducts as $index => $product)
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3 text-center">
                  {{ $legalProducts->firstItem() + $index }}
                </td>
                <td class="px-4 py-3 font-semibold">{{ $product->title }}</td>
                <td class="px-4 py-3">
                  {{ $product->category->name ?? 'Tanpa Kategori' }}
                </td>
                <td class="px-4 py-3 text-center">{{ $product->year }}</td>
                <td class="px-4 py-3 text-center">
                  <a href="{{ $product->link }}" target="_blank" rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg text-sm transition duration-150 ease-in-out">
                    <i class="fas fa-download mr-1"></i> Download
                  </a>
                </td>
              </tr>
            @empty
              <tr class="border-b">
                <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                  Data produk hukum tidak ditemukan.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      @if ($legalProducts->hasPages())
        <div class="mt-8">
          {{ $legalProducts->links('pagination::tailwind') }}
        </div>
      @endif
    </div>
  </div>
</section>
