<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stunting;
use App\Http\Requests\Master\Stunting\StoreStuntingRequest;
use Illuminate\Http\Request;

class StuntingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Stunting::query();

    $query->when($search, function ($q, $search) {
      return $q->where('stunting_name', 'like', "%{$search}%");
    });

    $stuntings = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Stunting',
      'main' => 'admin.stunting.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Stunting',
        ]
      ],
      'stuntings' => $stuntings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Stunting',
      'main' => 'admin.stunting.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.stunting.index',
          'title' => 'Stunting',
        ],
        [
          'title' => 'Tambah Stunting',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreStuntingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Stunting::create($validatedData);

      return redirect()->route('master.stunting.index')
        ->with('success', 'Stunting berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(Stunting $stunting)
  {
    $data = [
      'title' => 'Detail Stunting',
      'main' => 'admin.stunting.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.stunting.index',
          'title' => 'Stunting',
        ],
        [
          'title' => 'Detail Stunting',
        ]
      ],
      'stunting' => $stunting
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(Stunting $stunting)
  {
    $data = [
      'title' => 'Edit Stunting',
      'main' => 'admin.stunting.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'master.stunting.index',
          'title' => 'Stunting',
        ],
        [
          'title' => 'Edit Stunting',
        ]
      ],
      'stunting' => $stunting
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreStuntingRequest $request, Stunting $stunting)
  {
    $validatedData = $request->validated();

    $stunting->update($validatedData);

    return redirect()->route('master.stunting.index')
      ->with('success', 'Stunting berhasil diperbarui.');
  }

  public function destroy(Stunting $stunting)
  {
    $stunting->delete();

    return redirect()->route('master.stunting.index')
      ->with('success', 'Stunting berhasil dihapus.');
  }
}
