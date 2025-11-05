<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Http\Requests\Master\Education\StoreEducationRequest;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Education::query();

        $query->when($search, function ($q, $search) {
            return $q->where('education_name', 'like', "%{$search}%");
        });

        $educations = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar Pendidikan',
            'main' => 'admin.education.index',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Pendidikan',
                ]
            ],
            'educations' => $educations
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pendidikan',
            'main' => 'admin.education.create',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.education.index',
                    'title' => 'Pendidikan',
                ],
                [
                    'title' => 'Tambah Pendidikan',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreEducationRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Education::create($validatedData);

            return redirect()->route('master.education.index')
                ->with('success', 'Pendidikan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function show(Education $education)
    {
        $data = [
            'title' => 'Detail Pendidikan',
            'main' => 'admin.education.show',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.education.index',
                    'title' => 'Pendidikan',
                ],
                [
                    'title' => 'Detail Pendidikan',
                ]
            ],
            'education' => $education
        ];

        return view('admin.layout.template', $data);
    }

    public function edit(Education $education)
    {
        $data = [
            'title' => 'Edit Pendidikan',
            'main' => 'admin.education.edit',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.education.index',
                    'title' => 'Pendidikan',
                ],
                [
                    'title' => 'Edit Pendidikan',
                ]
            ],
            'education' => $education
        ];

        return view('admin.layout.template', $data);
    }

    public function update(StoreEducationRequest $request, Education $education)
    {
        $validatedData = $request->validated();

        $education->update($validatedData);

        return redirect()->route('master.education.index')
            ->with('success', 'Pendidikan berhasil diperbarui.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('master.education.index')
            ->with('success', 'Pendidikan berhasil dihapus.');
    }
}
