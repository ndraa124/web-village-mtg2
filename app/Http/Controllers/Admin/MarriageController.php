<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marriage;
use App\Http\Requests\Master\Marriage\StoreMarriageRequest;
use Illuminate\Http\Request;

class MarriageController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Marriage::query();

    $query->when($search, function ($q, $search) {
      return $q->where('marriage_name', 'like', "%{$search}%");
    });

    $marriages = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Perkawinan',
      'main' => 'admin.master.marriage.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Perkawinan',
        ]
      ],
      'marriages' => $marriages
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Perkawinan',
      'main' => 'admin.master.marriage.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.marriage.index',
          'title' => 'Perkawinan',
        ],
        [
          'title' => 'Tambah Perkawinan',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreMarriageRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Marriage::create($validatedData);

      return redirect()->route('admin.master.marriage.index')
        ->with('success', 'Perkawinan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Marriage $marriage)
  {
    $data = [
      'title' => 'Edit Perkawinan',
      'main' => 'admin.master.marriage.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.marriage.index',
          'title' => 'Perkawinan',
        ],
        [
          'title' => 'Edit Perkawinan',
        ]
      ],
      'marriage' => $marriage
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreMarriageRequest $request, Marriage $marriage)
  {
    $validatedData = $request->validated();

    $marriage->update($validatedData);

    return redirect()->route('admin.master.marriage.index')
      ->with('success', 'Perkawinan berhasil diperbarui.');
  }

  public function destroy(Marriage $marriage)
  {
    $marriage->delete();

    return redirect()->route('admin.master.marriage.index')
      ->with('success', 'Perkawinan berhasil dihapus.');
  }
}
