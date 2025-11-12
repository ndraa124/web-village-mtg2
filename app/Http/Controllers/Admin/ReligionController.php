<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use App\Http\Requests\Master\Religion\StoreReligionRequest;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Religion::query();

    $query->when($search, function ($q, $search) {
      return $q->where('religion_name', 'like', "%{$search}%");
    });

    $religions = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Agama',
      'main' => 'admin.master.religion.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Agama',
        ]
      ],
      'religions' => $religions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Agama',
      'main' => 'admin.master.religion.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.religion.index',
          'title' => 'Agama',
        ],
        [
          'title' => 'Tambah Agama',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreReligionRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Religion::create($validatedData);

      return redirect()->route('admin.master.religion.index')
        ->with('success', 'Agama berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Religion $religion)
  {
    $data = [
      'title' => 'Edit Agama',
      'main' => 'admin.master.religion.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.religion.index',
          'title' => 'Agama',
        ],
        [
          'title' => 'Edit Agama',
        ]
      ],
      'religion' => $religion
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreReligionRequest $request, Religion $religion)
  {
    $validatedData = $request->validated();

    $religion->update($validatedData);

    return redirect()->route('admin.master.religion.index')
      ->with('success', 'Agama berhasil diperbarui.');
  }

  public function destroy(Religion $religion)
  {
    $religion->delete();

    return redirect()->route('admin.master.religion.index')
      ->with('success', 'Agama berhasil dihapus.');
  }
}
