<style>
  @keyframes progress-error {
    from {
      width: 0%;
    }

    to {
      width: 100%;
    }
  }

  @keyframes draw-x {
    to {
      stroke-dashoffset: 0;
    }
  }

  @keyframes shake {

    0%,
    100% {
      transform: translateX(0);
    }

    10%,
    30%,
    50%,
    70%,
    90% {
      transform: translateX(-4px);
    }

    20%,
    40%,
    60%,
    80% {
      transform: translateX(4px);
    }
  }

  .animate-progress-error {
    animation: progress-error 2s ease-out forwards;
  }

  .animate-draw-x path {
    animation: draw-x 0.6s ease-out 0.3s forwards;
  }

  .animate-shake {
    animation: shake 0.5s ease-in-out;
  }
</style>

<div id="alert-error" class="relative p-6 mb-8 rounded-2xl shadow-xl border border-red-100 bg-gradient-to-br from-white via-red-50/30 to-white transition-all duration-300 hover:shadow-2xl group animate-shake" role="alert">

  <div class="absolute top-0 left-0 right-0 h-1 bg-gray-100 rounded-t-2xl overflow-hidden">
    <div class="h-full bg-gradient-to-r from-red-400 via-rose-500 to-red-600 animate-progress-error"></div>
  </div>

  <div class="flex items-start gap-4">
    <div class="flex-shrink-0">
      <div class="relative">
        <div class="absolute inset-0 bg-red-400 rounded-full blur-md opacity-40 group-hover:opacity-60 transition-opacity"></div>
        <div class="relative w-12 h-12 flex items-center justify-center bg-gradient-to-br from-red-500 to-rose-600 rounded-full shadow-lg">
          <svg class="w-6 h-6 text-white animate-draw-x" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" stroke-dasharray="24" stroke-dashoffset="24"></path>
          </svg>
        </div>
      </div>
    </div>

    <div class="flex-1 space-y-2">
      <div class="flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-900">
          {{ $title ?? 'Terjadi Kesalahan!' }}
        </h3>
        <button type="button" onclick="this.closest('[role=alert]').remove()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <p class="text-gray-600 leading-relaxed text-[15px]">
        {{ $message ?? 'Terjadi kesalahan saat memproses permintaan Anda.' }}
      </p>

      @if ($showContactInfo ?? true)
        <div class="flex items-center gap-2 pt-1">
          <div class="flex items-center gap-1.5 text-xs text-gray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ $contactText ?? 'Silakan hubungi admin jika pengajuan masih gagal' }}</span>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>

<script>
  setTimeout(function() {
    const alert = document.getElementById('alert-error');

    if (alert) {
      alert.style.opacity = '0';
      alert.style.transform = 'translateY(-20px)';
      setTimeout(() => alert.remove(), 300);
    }
  }, 8000);
</script>
