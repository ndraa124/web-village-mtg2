<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbdDevRealization;
use App\Http\Requests\Infographics\ApbdDevRealization\StoreApbdDevRealizationRequest;
use App\Http\Requests\Infographics\ApbdDevRealization\UpdateApbdDevRealizationRequest;
use Illuminate\Http\Request;

class InfographicsApbdDevRealizationController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbdDevRealization::query();

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhere('category_name', 'like', "%{$search}%");
    });

    $apbdDevRealizations = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Realisasi Pembangunan',
      'main' => 'admin.infographics.apbd_development_realization.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Realisasi Pembangunan'
        ],
      ],
      'apbdRealizations' => $apbdDevRealizations
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Realisasi Pembangunan',
      'main' => 'admin.infographics.apbd_development_realization.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.apbd.development-realization.index',
          'title' => 'Daftar Realisasi Pembangunan'
        ],
        ['title' => 'Tambah Data'],
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdDevRealizationRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdDevRealization::create($validatedData);

      return redirect()->route('infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsApbdDevRealization $apbdRealization)
  {
    $data = [
      'title' => 'Edit Realisasi Pembangunan',
      'main' => 'admin.infographics.apbd_development_realization.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.apbd.development-realization.index',
          'title' => 'Daftar Realisasi Pembangunan'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbdRealization' => $apbdRealization
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdDevRealizationRequest $request, InfographicsApbdDevRealization $apbdRealization)
  {
    $validatedData = $request->validated();

    try {
      $apbdRealization->update($validatedData);

      return redirect()->route('infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdDevRealization $apbdRealization)
  {
    try {
      $apbdRealization->delete();

      return redirect()->route('infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
