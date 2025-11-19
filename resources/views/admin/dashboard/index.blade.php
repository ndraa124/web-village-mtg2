<div class="row">
  <div class="col-xxl-6 col-xxxl-12 mb-4">
    <div class="card bg-white p-20 pb-0 rounded-10 border border-white h-100">
      <h3 class="mb-20">Ringkasan Desa</h3>

      <div class="row mb-20" style="--bs-gutter-x: 20px;">
        <div class="col-md-6 mb-4">
          <div class="card bg-body-bg p-20 rounded-10 border border-white h-100">
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3 class="mb-10">Total Penduduk</h3>
                <h2 class="fs-26 fw-medium mb-0 lh-1">{{ number_format($totalPopulation) }}</h2>
              </div>
              <div class="flex-shrink-0 ms-sm-3">
                <div class="bg-primary text-center rounded-circle d-block for-mobile-width" style="width: 75px; height: 75px; line-height: 75px;">
                  <img src="{{ asset('admin/images/total-students.svg') }}" alt="total-penduduk">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-auto" style="margin-top: 23px;">
              <p class="mb-0 fs-14">Data Kependudukan</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card bg-body-bg p-20 rounded-10 border border-white h-100">
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3 class="mb-10">Permohonan Baru</h3>
                <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $pendingServices }}</h2>
              </div>
              <div class="flex-shrink-0 ms-sm-3">
                <div class="bg-warning text-center rounded-circle d-block for-mobile-width" style="width: 75px; height: 75px; line-height: 75px;">
                  <img src="{{ asset('admin/images/active-projects.svg') }}" alt="pending">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-auto" style="margin-top: 23px;">
              <p class="mb-0 fs-14">Menunggu Verifikasi</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card bg-body-bg p-20 rounded-10 border border-white h-100">
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3 class="mb-10">Pengunjung Hari Ini</h3>
                <h2 class="fs-26 fw-medium mb-0 lh-1">{{ $todayVisitors }}</h2>
              </div>
              <div class="flex-shrink-0 ms-sm-3">
                <div class="bg-info text-center rounded-circle d-block for-mobile-width" style="width: 75px; height: 75px; line-height: 75px;">
                  <img src="{{ asset('admin/images/completed-projects.svg') }}" alt="visitors">
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-auto" style="margin-top: 23px;">
              <p class="mb-0 fs-14">Statistik Web</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card bg-body-bg p-20 rounded-10 border border-white h-100">
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3 class="mb-10">Pendapatan Desa</h3>
                <h2 class="fs-26 fw-medium mb-0 lh-1">Rp{{ number_format($totalIncome / 1000000, 0) }} Jt</h2>
              </div>
              <div class="flex-shrink-0 ms-sm-3">
                <div class="bg-info text-center rounded-circle d-block for-mobile-width" style="width: 75px; height: 75px; line-height: 75px;">
                  <i class="ri-money-dollar-circle-line text-white fs-1"></i>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-auto" style="margin-top: 23px;">
              <p class="mb-0 fs-14">APBD Tahun {{ date('Y') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xxl-6 col-xxxl-12 mb-4">
    <div class="card bg-white p-20 rounded-10 border border-white h-100">

      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-0">
        <h3>Statistik APBD</h3>
        <div class="dropdown select-dropdown without-border">
          <button class="dropdown-toggle bg-transparent text-secondary fs-15" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tahun {{ $selectedYear }}
          </button>

          <ul class="dropdown-menu dropdown-menu-end bg-white border-0 box-shadow rounded-10">
            @foreach ($availableYears as $year)
              <li>
                <a href="{{ route('admin.dashboard', ['year' => $year]) }}" class="dropdown-item text-secondary {{ $selectedYear == $year ? 'active' : '' }}">
                  {{ $year }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="d-flex align-items-center justify-content-center h-100">
        <div id="projects_roadmap_chart" class="w-100" style="margin-bottom: -13px;"></div>
      </div>

    </div>
  </div>

</div>

<div class="row">
  <div class="col-xxl-9 col-lg-8">
    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
        <h3>Permohonan Layanan Terbaru</h3>
        <div class="dropdown select-dropdown without-border">
          <a href="{{ route('admin.services.submissions.index') }}" class="btn btn-sm btn-primary text-white">Lihat Semua</a>
        </div>
      </div>
      <div class="default-table-area mx-minus-1 table-all-projects">
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col" class="fw-medium">Tanggal</th>
                <th scope="col" class="fw-medium">Nama Pemohon</th>
                <th scope="col" class="fw-medium">Jenis Layanan</th>
                <th scope="col" class="fw-medium">NIK</th>
                <th scope="col" class="fw-medium">Status</th>
                <th scope="col" class="fw-medium">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($recentSubmissions as $item)
                <tr>
                  <td class="text-body">{{ $item->created_at->format('d M, Y') }}</td>
                  <td class="text-body">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <span class="bg-primary-50 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 35px; height: 35px;">
                          {{ substr($item->name, 0, 1) }}
                        </span>
                      </div>
                      <div class="flex-grow-1 ms-2">
                        {{ $item->name }}
                      </div>
                    </div>
                  </td>
                  <td class="text-secondary">{{ $item->service->title ?? '-' }}</td>
                  <td class="text-body">{{ $item->nik }}</td>
                  <td>
                    @if ($item->status == 'pending')
                      <span class="text-warning bg-warning bg-opacity-10 fs-15 fw-normal d-inline-block default-badge">Pending</span>
                    @elseif($item->status == 'completed')
                      <span class="text-success bg-success bg-opacity-10 fs-15 fw-normal d-inline-block default-badge">Selesai</span>
                    @elseif($item->status == 'rejected')
                      <span class="text-danger bg-danger bg-opacity-10 fs-15 fw-normal d-inline-block default-badge">Ditolak</span>
                    @endif
                  </td>
                  <td>
                    <div class="d-flex justify-content-end" style="gap: 12px;">
                      <a href="{{ route('admin.services.submissions.show', $item->id) }}" class="bg-transparent p-0 border-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ $item->status == 'pending' ? 'Verifikasi' : 'Detail' }}">
                        @if ($item->status == 'pending')
                          <i class="material-symbols-outlined fs-16 fw-normal text-primary">verified</i>
                        @else
                          <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                        @endif
                      </a>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-4">Belum ada permohonan layanan.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xxl-3 col-lg-4">
    <div class="card bg-white rounded-10 border border-white p-20 mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3" style="margin-bottom: 36.5px;">
        <h3>Demografi</h3>
      </div>
      <div class="text-center">
        <div id="projects_progress_chart" style="margin-bottom: 18px;"></div>
        <p class="fs-14">Perbandingan Laki-laki & Perempuan</p>
      </div>
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
        <h3>Perangkat Desa</h3>
        <a href="{{ route('admin.content.profile.organization.officials.index') }}" class="text-decoration-none fs-15 hover-text">Lihat Semua</a>
      </div>
      <div class="default-table-area mx-minus-1 table-team-members">
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col" class="fw-medium">Nama</th>
                <th scope="col" class="fw-medium text-end">Jabatan</th>
              </tr>
            </thead>
            <tbody>
              @forelse($officials as $official)
                <tr>
                  <td class="border-0">
                    <div class="d-flex align-items-center text-decoration-none">
                      <div class="flex-shrink-0">
                        @if ($official->image)
                          <img src="{{ Storage::url($official->image) }}" class="rounded-circle" style="width: 45px; height: 45px; object-fit:cover;" alt="user">
                        @else
                          <img src="{{ asset('admin/images/user1.jpg') }}" class="rounded-circle" style="width: 45px; height: 45px;" alt="default">
                        @endif
                      </div>
                      <div class="flex-grow-1 ms-12">
                        <h3 class="fw-medium fs-16">{{ $official->name }}</h3>
                      </div>
                    </div>
                  </td>
                  <td class="text-body border-0 text-end">
                    <span class="badge bg-primary-transparent text-primary">
                      {{ $official->position->position_name ?? '-' }}
                    </span>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="2" class="text-center text-muted">Data kosong</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="{{ asset('admin/js/apexcharts.min.js') }}"></script>

<script>
  // --- CHART 1: STATISTICS APBD (Menggantikan Projects Roadmap) ---
  (function() {
    var options = {
      series: [{
        name: 'Pendapatan',
        data: [{{ $totalIncome }}] // Data dari Controller
      }, {
        name: 'Belanja',
        data: [{{ $totalShopping }}] // Data dari Controller
      }],
      chart: {
        type: 'bar',
        height: 320,
        toolbar: {
          show: false
        },
        fontFamily: 'Inter, sans-serif',
      },
      colors: ['#5C4EDB', '#FFB264'], // Warna Primary & Warning Fila
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '40%',
          borderRadius: 5
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: ['APBD {{ date('Y') }}'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
      },
      yaxis: {
        title: {
          text: 'Rupiah (Rp)'
        },
        labels: {
          formatter: function(val) {
            // Format Juta (Jt) agar rapi
            return (val / 1000000).toFixed(0) + " Jt";
          }
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        y: {
          formatter: function(val) {
            return "Rp " + val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
          }
        }
      }
    };
    var chart = new ApexCharts(document.querySelector("#projects_roadmap_chart"), options);
    chart.render();
  })();

  // --- CHART 2: DEMOGRAFI (Menggantikan Projects Progress) ---
  (function() {
    var options = {
      series: [{{ $totalMale }}, {{ $totalFemale }}], // Data Laki-laki, Perempuan
      chart: {
        height: 320,
        type: 'donut',
        fontFamily: 'Inter, sans-serif',
      },
      labels: ['Laki-laki', 'Perempuan'],
      colors: ['#5C4EDB', '#2DB6F5'], // Warna Fila
      dataLabels: {
        enabled: false
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
          radius: 12
        },
        itemMargin: {
          horizontal: 10,
          vertical: 5
        }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '65%',
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true,
                label: 'Total',
                fontSize: '16px',
                fontWeight: 600,
                color: '#5B5B98',
              }
            }
          }
        }
      }
    };
    var chart = new ApexCharts(document.querySelector("#projects_progress_chart"), options);
    chart.render();
  })();
</script>
