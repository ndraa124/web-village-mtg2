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
            'title' => 'Daftar Jaga',
            'main' => 'admin.master.hamlet.index',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Jaga',
                ]
            ],
            'hamlets' => $hamlets
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Jaga',
            'main' => 'admin.master.hamlet.create',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'admin.master.hamlet.index',
                    'title' => 'Jaga',
                ],
                [
                    'title' => 'Tambah Jaga',
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

            return redirect()->route('admin.master.hamlet.index')
                ->with('success', 'Jaga berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function edit(Hamlet $hamlet)
    {
        $data = [
            'title' => 'Edit Jaga',
            'main' => 'admin.master.hamlet.edit',
            'breadcrumbs' => [
                [
                    'route' => 'admin.dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'admin.master.hamlet.index',
                    'title' => 'Jaga',
                ],
                [
                    'title' => 'Edit Jaga',
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

        return redirect()->route('admin.master.hamlet.index')
            ->with('success', 'Jaga berhasil diperbarui.');
    }

    public function destroy(Hamlet $hamlet)
    {
        $hamlet->delete();

        return redirect()->route('admin.master.hamlet.index')
            ->with('success', 'Jaga berhasil dihapus.');
    }
}
