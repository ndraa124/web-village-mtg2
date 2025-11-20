<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsSdgs;
use App\Http\Requests\Infographics\Sdgs\StoreSdgsRequest;
use App\Http\Requests\Infographics\Sdgs\UpdateSdgsRequest;
use Illuminate\Http\Request;

class InfographicsSdgsController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsSdgs::query();

    $query->when($search, function ($q, $search) {
      return $q->where('purpose', 'like', "%{$search}%");
    });

    $sdgsData = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Sustainable Development Goals/SDGs)',
      'main' => 'admin.infographics.sdgs.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Infografis SDGs'
        ],
      ],
      'sdgsData' => $sdgsData
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.sdgs.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.sdgs.index',
          'title' => 'Infografis SDGs'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreSdgsRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsSdgs::create($validatedData);

      return redirect()->route('admin.infographics.sdgs.index')
        ->with('success', 'Data Infografis SDGs berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsSdgs $sdg)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.sdgs.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.sdgs.index',
          'title' => 'Infografis SDGs'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'sdg' => $sdg
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateSdgsRequest $request, InfographicsSdgs $sdg)
  {
    $validatedData = $request->validated();

    try {
      $sdg->update($validatedData);

      return redirect()->route('admin.infographics.sdgs.index')
        ->with('success', 'Data Infografis SDGs berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsSdgs $sdg)
  {
    try {
      $sdg->delete();

      return redirect()->route('admin.infographics.sdgs.index')
        ->with('success', 'Data Infografis SDGs berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
