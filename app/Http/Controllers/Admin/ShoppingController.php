<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shopping;
use App\Http\Requests\Master\Shopping\StoreShoppingRequest;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Shopping::query();

    $query->when($search, function ($q, $search) {
      return $q->where('shopping_name', 'like', "%{$search}%");
    });

    $shoppings = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Belanja',
      'main' => 'admin.master.shopping.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Belanja',
        ]
      ],
      'shoppings' => $shoppings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Belanja',
      'main' => 'admin.master.shopping.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.shopping.index',
          'title' => 'Belanja',
        ],
        [
          'title' => 'Tambah Belanja',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreShoppingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Shopping::create($validatedData);

      return redirect()->route('admin.master.shopping.index')
        ->with('success', 'Belanja berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Shopping $shopping)
  {
    $data = [
      'title' => 'Edit Belanja',
      'main' => 'admin.master.shopping.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.shopping.index',
          'title' => 'Belanja',
        ],
        [
          'title' => 'Edit Belanja',
        ]
      ],
      'shopping' => $shopping
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreShoppingRequest $request, Shopping $shopping)
  {
    $validatedData = $request->validated();

    $shopping->update($validatedData);

    return redirect()->route('admin.master.shopping.index')
      ->with('success', 'Belanja berhasil diperbarui.');
  }

  public function destroy(Shopping $shopping)
  {
    $shopping->delete();

    return redirect()->route('admin.master.shopping.index')
      ->with('success', 'Belanja berhasil dihapus.');
  }
}
