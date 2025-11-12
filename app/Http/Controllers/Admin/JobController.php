<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Http\Requests\Master\Job\StoreJobRequest;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Job::query();

        $query->when($search, function ($q, $search) {
            return $q->where('job_name', 'like', "%{$search}%");
        });

        $jobs = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar Pekerjaan',
            'main' => 'admin.master.job.index',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Pekerjaan',
                ]
            ],
            'jobs' => $jobs
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pekerjaan',
            'main' => 'admin.master.job.create',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'admin.master.job.index',
                    'title' => 'Pekerjaan',
                ],
                [
                    'title' => 'Tambah Pekerjaan',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreJobRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Job::create($validatedData);

            return redirect()->route('admin.master.job.index')
                ->with('success', 'Pekerjaan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function edit(Job $job)
    {
        $data = [
            'title' => 'Edit Pekerjaan',
            'main' => 'admin.master.job.edit',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'admin.master.job.index',
                    'title' => 'Pekerjaan',
                ],
                [
                    'title' => 'Edit Pekerjaan',
                ]
            ],
            'job' => $job
        ];

        return view('admin.layout.template', $data);
    }

    public function update(StoreJobRequest $request, Job $job)
    {
        $validatedData = $request->validated();

        $job->update($validatedData);

        return redirect()->route('admin.master.job.index')
            ->with('success', 'Pekerjaan berhasil diperbarui.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('admin.master.job.index')
            ->with('success', 'Pekerjaan berhasil dihapus.');
    }
}
