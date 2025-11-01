<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Http\Requests\Master\Gender\StoreGenderRequest;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Gender::query();

        $query->when($search, function ($q, $search) {
            return $q->where('gender_name', 'like', "%{$search}%");
        });

        $genders = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar Jenis Kelamin',
            'main' => 'admin.gender.index',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Jenis Kelamin',
                ]
            ],
            'genders' => $genders
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Jenis Kelamin',
            'main' => 'admin.gender.create',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.gender.index',
                    'title' => 'Jenis Kelamin',
                ],
                [
                    'title' => 'Tambah Jenis Kelamin',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreGenderRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Gender::create($validatedData);

            return redirect()->route('master.gender.index')
                ->with('success', 'Jenis kelamin berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function show(Gender $gender)
    {
        $data = [
            'title' => 'Detail Jenis Kelamin',
            'main' => 'admin.gender.show',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.gender.index',
                    'title' => 'Jenis Kelamin',
                ],
                [
                    'title' => 'Detail Jenis Kelamin',
                ]
            ],
            'gender' => $gender
        ];

        return view('admin.layout.template', $data);
    }

    public function edit(Gender $gender)
    {
        $data = [
            'title' => 'Edit Jenis Kelamin',
            'main' => 'admin.gender.edit',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.gender.index',
                    'title' => 'Jenis Kelamin',
                ],
                [
                    'title' => 'Edit Jenis Kelamin',
                ]
            ],
            'gender' => $gender
        ];

        return view('admin.layout.template', $data);
    }

    public function update(StoreGenderRequest $request, Gender $gender)
    {
        $validatedData = $request->validated();

        $gender->update($validatedData);

        return redirect()->route('master.gender.index')
            ->with('success', 'Jenis kelamin berhasil diperbarui.');
    }

    public function destroy(Gender $gender)
    {
        $gender->delete();

        return redirect()->route('master.gender.index')
            ->with('success', 'Jenis kelamin berhasil dihapus.');
    }
}
