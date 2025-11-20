<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbd;
use App\Http\Requests\Infographics\Apbd\StoreApbdRequest;
use App\Http\Requests\Infographics\Apbd\UpdateApbdRequest;
use Illuminate\Http\Request;

class InfographicsApbdController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbd::query();

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%");
    });

    $apbds = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis APBD',
      'main' => 'admin.infographics.apbd.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'APBD'
        ],
      ],
      'apbds' => $apbds
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.apbd.create',
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
          'route' => 'admin.infographics.apbd.index',
          'title' => 'APBD'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbd::create($validatedData);

      return redirect()->route('admin.infographics.apbd.index')
        ->with('success', 'Data APBD berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsApbd $apbd)
  {
    $data = [
      'title' => 'Detail Data',
      'main' => 'admin.infographics.apbd.show',
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
          'route' => 'admin.infographics.apbd.index',
          'title' => 'APBD'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'apbd' => $apbd
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsApbd $apbd)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.apbd.edit',
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
          'route' => 'admin.infographics.apbd.index',
          'title' => 'APBD'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbd' => $apbd
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdRequest $request, InfographicsApbd $apbd)
  {
    $validatedData = $request->validated();

    try {
      $apbd->update($validatedData);

      return redirect()->route('admin.infographics.apbd.index')
        ->with('success', 'Data APBD berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbd $apbd)
  {
    try {
      $apbd->delete();

      return redirect()->route('admin.infographics.apbd.index')
        ->with('success', 'Data APBD berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
