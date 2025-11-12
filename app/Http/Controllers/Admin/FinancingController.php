<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Financing;
use App\Http\Requests\Master\Financing\StoreFinancingRequest;
use Illuminate\Http\Request;

class FinancingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Financing::query();

    $query->when($search, function ($q, $search) {
      return $q->where('financing_name', 'like', "%{$search}%");
    });

    $financings = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Pembiayaan',
      'main' => 'admin.master.financing.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Pembiayaan',
        ]
      ],
      'financings' => $financings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Pembiayaan',
      'main' => 'admin.master.financing.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.financing.index',
          'title' => 'Pembiayaan',
        ],
        [
          'title' => 'Tambah Pembiayaan',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreFinancingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Financing::create($validatedData);

      return redirect()->route('admin.master.financing.index')
        ->with('success', 'Pembiayaan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Financing $financing)
  {
    $data = [
      'title' => 'Edit Pembiayaan',
      'main' => 'admin.master.financing.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.financing.index',
          'title' => 'Pembiayaan',
        ],
        [
          'title' => 'Edit Pembiayaan',
        ]
      ],
      'financing' => $financing
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreFinancingRequest $request, Financing $financing)
  {
    $validatedData = $request->validated();

    $financing->update($validatedData);

    return redirect()->route('admin.master.financing.index')
      ->with('success', 'Pembiayaan berhasil diperbarui.');
  }

  public function destroy(Financing $financing)
  {
    $financing->delete();

    return redirect()->route('admin.master.financing.index')
      ->with('success', 'Pembiayaan berhasil dihapus.');
  }
}
