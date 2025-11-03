<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbdYear;
use App\Http\Requests\Infographics\ApbdYear\StoreApbdYearRequest;
use App\Http\Requests\Infographics\ApbdYear\UpdateApbdYearRequest;
use Illuminate\Http\Request;

class InfographicsApbdYearController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbdYear::query();

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%");
    });

    $apbdYears = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar APBD Pendapatan & Belanja',
      'main' => 'admin.infographics.apbd_year.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar APBD Pendapatan & Belanja'
        ],
      ],
      'apbdYears' => $apbdYears
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data Pendapatan & Belanja',
      'main' => 'admin.infographics.apbd_year.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.apbd.apbd_year.index',
          'title' => 'Daftar APBD Pendapatan & Belanja'
        ],
        ['title' => 'Tambah Data'],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdYearRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdYear::create($validatedData);

      return redirect()->route('infographics.apbd.apbd_year.index')
        ->with('success', 'Data Pendapatan & Belanja berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsApbdYear $apbdYear)
  {
    $data = [
      'title' => 'Detail Pendapatan & Belanja',
      'main' => 'admin.infographics.apbd_year.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.apbd.apbd_year.index',
          'title' => 'Daftar APBD Pendapatan & Belanja'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'apbdYear' => $apbdYear
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsApbdYear $apbdYear)
  {
    $data = [
      'title' => 'Edit Pendapatan & Belanja',
      'main' => 'admin.infographics.apbd_year.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.apbd.apbd_year.index',
          'title' => 'Daftar APBD Pendapatan & Belanja'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbdYear' => $apbdYear
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdYearRequest $request, InfographicsApbdYear $apbdYear)
  {
    $validatedData = $request->validated();

    try {
      $apbdYear->update($validatedData);

      return redirect()->route('infographics.apbd.apbd_year.index')
        ->with('success', 'Data Pendapatan & Belanja berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdYear $apbdYear)
  {
    try {
      $apbdYear->delete();

      return redirect()->route('infographics.apbd.apbd_year.index')
        ->with('success', 'Data Pendapatan & Belanja berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
