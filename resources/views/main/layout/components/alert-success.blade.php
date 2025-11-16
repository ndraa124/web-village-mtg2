<style>
  @keyframes progress {
    from {
      width: 0%;
    }

    to {
      width: 100%;
    }
  }

  @keyframes draw-check {
    to {
      stroke-dashoffset: 0;
    }
  }

  .animate-progress {
    animation: progress 2s ease-out forwards;
  }

  .animate-draw-check path {
    animation: draw-check 0.6s ease-out 0.3s forwards;
  }
</style>

<div id="alert-success" class="relative p-6 mb-8 rounded-2xl shadow-xl border border-green-100 bg-gradient-to-br from-white via-green-50/30 to-white transition-all duration-300 hover:shadow-2xl group" role="alert">

  <div class="absolute top-0 left-0 right-0 h-1 bg-gray-100 rounded-t-2xl overflow-hidden">
    <div class="h-full bg-gradient-to-r from-green-400 via-emerald-500 to-green-600 animate-progress"></div>
  </div>

  <div class="flex items-start gap-4">
    <div class="flex-shrink-0">
      <div class="relative">
        <div class="absolute inset-0 bg-green-400 rounded-full blur-md opacity-40 group-hover:opacity-60 transition-opacity"></div>
        <div class="relative w-12 h-12 flex items-center justify-center bg-gradient-to-br from-green-500 to-emerald-600 rounded-full shadow-lg">
          <svg class="w-6 h-6 text-white animate-draw-check" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" stroke-dasharray="24" stroke-dashoffset="24"></path>
          </svg>
        </div>
      </div>
    </div>

    <div class="flex-1 space-y-2">
      <div class="flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-900">
          {{ $title ?? 'Berhasil!' }}
        </h3>
        <button type="button" onclick="this.closest('[role=alert]').remove()" class="text-gray-400 hover:text-gray-600 transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
      <p class="text-gray-600 leading-relaxed text-[15px]">
        {{ $message ?? '-' }}
      </p>

      @if ($showEmailInfo ?? true)
        <div class="flex items-center gap-2 pt-1">
          <div class="flex items-center gap-1.5 text-xs text-gray-500">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span>{{ $emailText ?? 'Notifikasi akan dikirim via email' }}</span>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>

<script>
  setTimeout(function() {
    const alert = document.getElementById('alert-success');

    if (alert) {
      alert.style.opacity = '0';
      alert.style.transform = 'translateY(-20px)';
      setTimeout(() => alert.remove(), 300);
    }
  }, 5000);
</script>
