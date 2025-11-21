<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentJob;
use App\Models\Job;
use App\Http\Requests\Infographics\ResidentJob\StoreResidentJobRequest;
use App\Http\Requests\Infographics\ResidentJob\UpdateResidentJobRequest;
use Illuminate\Http\Request;

class InfographicsResidentJobController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentJob::with('job');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('job', function ($sq) use ($search) {
        $sq->where('job_name', 'like', "%{$search}%");
      });
    });

    $residentJobs = $query->latest('total')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident_job.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Pekerjaan'
        ],
      ],
      'residentJobs' => $residentJobs
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $existingJobIds = InfographicsResidentJob::pluck('job_id');

    $jobs = Job::whereNotIn('id', $existingJobIds)
      ->orderBy('job_name', 'asc')
      ->get();

    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.resident_job.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.job.index',
          'title' => 'Pekerjaan'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'jobs' => $jobs
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentJobRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentJob::create($validatedData);

      return redirect()->route('admin.infographics.resident.job.index')
        ->with('success', 'Data pekerjaan penduduk berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentJob $residentJob)
  {
    $addedJobIds = InfographicsResidentJob::where('id', '!=', $residentJob->id)
      ->pluck('job_id');

    $jobs = Job::whereNotIn('id', $addedJobIds)
      ->orderBy('job_name', 'asc')
      ->get();

    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident_job.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.job.index',
          'title' => 'Pekerjaan'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'residentJob' => $residentJob,
      'jobs' => $jobs
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentJobRequest $request, InfographicsResidentJob $residentJob)
  {
    $validatedData = $request->validated();

    try {
      $residentJob->update($validatedData);

      return redirect()->route('admin.infographics.resident.job.index')
        ->with('success', 'Data pekerjaan penduduk berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentJob $residentJob)
  {
    try {
      $residentJob->delete();

      return redirect()->route('admin.infographics.resident.job.index')
        ->with('success', 'Data pekerjaan penduduk berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
