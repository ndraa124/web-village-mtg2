<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbdShopping;
use App\Models\Shopping;
use App\Http\Requests\Infographics\ApbdShopping\StoreApbdShoppingRequest;
use App\Http\Requests\Infographics\ApbdShopping\UpdateApbdShoppingRequest;
use Illuminate\Http\Request;

class InfographicsApbdShoppingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbdShopping::with('shopping');

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhereHas('shopping', function ($sq) use ($search) {
          $sq->where('shopping_name', 'like', "%{$search}%");
        });
    });

    $apbdShoppings = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis APBD',
      'main' => 'admin.infographics.apbd_shopping.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Belanja'
        ],
      ],
      'apbdShoppings' => $apbdShoppings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $shoppings = Shopping::orderBy('shopping_name', 'asc')->get();

    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.apbd_shopping.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.index',
          'title' => 'Infografis APBD'
        ],
        [
          'route' => 'admin.infographics.apbd.shopping.index',
          'title' => 'Belanja'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'shoppings' => $shoppings
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdShoppingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdShopping::create($validatedData);

      return redirect()->route('admin.infographics.apbd.shopping.index')
        ->with('success', 'Data Belanja APBD berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsApbdShopping $apbdShopping)
  {
    $shoppings = Shopping::orderBy('shopping_name', 'asc')->get();

    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.apbd_shopping.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.index',
          'title' => 'Infografis APBD'
        ],
        [
          'route' => 'admin.infographics.apbd.shopping.index',
          'title' => 'Belanja'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbdShopping' => $apbdShopping,
      'shoppings' => $shoppings
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdShoppingRequest $request, InfographicsApbdShopping $apbdShopping)
  {
    $validatedData = $request->validated();

    try {
      $apbdShopping->update($validatedData);

      return redirect()->route('admin.infographics.apbd.shopping.index')
        ->with('success', 'Data Belanja APBD berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdShopping $apbdShopping)
  {
    try {
      $apbdShopping->delete();

      return redirect()->route('admin.infographics.apbd.shopping.index')
        ->with('success', 'Data Belanja APBD berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
