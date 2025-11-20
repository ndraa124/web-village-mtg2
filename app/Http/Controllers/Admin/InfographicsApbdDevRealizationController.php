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
      'title' => 'Infografis APBD',
      'main' => 'admin.infographics.apbd_development_realization.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Realisasi Pembangunan'
        ],
      ],
      'apbdRealizations' => $apbdDevRealizations
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.apbd_development_realization.create',
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
          'route' => 'admin.infographics.apbd.development-realization.index',
          'title' => 'Realisasi Pembangunan'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdDevRealizationRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdDevRealization::create($validatedData);

      return redirect()->route('admin.infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsApbdDevRealization $apbdRealization)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.apbd_development_realization.edit',
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
          'route' => 'admin.infographics.apbd.development-realization.index',
          'title' => 'Realisasi Pembangunan'
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

      return redirect()->route('admin.infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdDevRealization $apbdRealization)
  {
    try {
      $apbdRealization->delete();

      return redirect()->route('admin.infographics.apbd.development-realization.index')
        ->with('success', 'Data realisasi pembangunan berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
