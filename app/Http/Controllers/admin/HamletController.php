<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hamlet;
use App\Http\Requests\Master\Hamlet\StoreHamletRequest;
use Illuminate\Http\Request;

class HamletController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = Hamlet::query();

        $query->when($search, function ($q, $search) {
            return $q->where('hamlet_name', 'like', "%{$search}%");
        });

        $hamlets = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar Dusun',
            'main' => 'admin.hamlet.index',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Dusun',
                ]
            ],
            'hamlets' => $hamlets
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Dusun',
            'main' => 'admin.hamlet.create',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.hamlet.index',
                    'title' => 'Dusun',
                ],
                [
                    'title' => 'Tambah Dusun',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreHamletRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Hamlet::create($validatedData);

            return redirect()->route('master.hamlet.index')
                ->with('success', 'Dusun berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function show(Hamlet $hamlet)
    {
        $data = [
            'title' => 'Detail Dusun',
            'main' => 'admin.hamlet.show',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.hamlet.index',
                    'title' => 'Dusun',
                ],
                [
                    'title' => 'Detail Dusun',
                ]
            ],
            'hamlet' => $hamlet
        ];

        return view('admin.layout.template', $data);
    }

    public function edit(Hamlet $hamlet)
    {
        $data = [
            'title' => 'Edit Dusun',
            'main' => 'admin.hamlet.edit',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.hamlet.index',
                    'title' => 'Dusun',
                ],
                [
                    'title' => 'Edit Dusun',
                ]
            ],
            'hamlet' => $hamlet
        ];

        return view('admin.layout.template', $data);
    }

    public function update(StoreHamletRequest $request, Hamlet $hamlet)
    {
        $validatedData = $request->validated();

        $hamlet->update($validatedData);

        return redirect()->route('master.hamlet.index')
            ->with('success', 'Dusun berhasil diperbarui.');
    }

    public function destroy(Hamlet $hamlet)
    {
        $hamlet->delete();

        return redirect()->route('master.hamlet.index')
            ->with('success', 'Dusun berhasil dihapus.');
    }
}
