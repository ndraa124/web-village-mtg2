<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Services::query();

    $query->when($search, function ($q, $search) {
      return $q->where('title', 'like', "%{$search}%");
    });

    $services = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Kelola Layanan Publik',
      'main'  => 'admin.service.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Kelola Layanan Publik'
        ],
      ],
      'services' => $services,
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Layanan Baru',
      'main'  => 'admin.service.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.services.index',
          'title' => 'Kelola Layanan Publik'
        ],
        [
          'title' => 'Tambah'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreServiceRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Services::create($validatedData);

      return redirect()->route('admin.services.index')
        ->with('success', 'Layanan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Services $service)
  {
    $data = [
      'title' => 'Ubah Layanan: ' . $service->title,
      'main'  => 'admin.service.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.services.index',
          'title' => 'Kelola Layanan Publik'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'service' => $service,
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateServiceRequest $request, Services $service)
  {
    $validatedData = $request->validated();

    $service->update($validatedData);

    return redirect()->route('admin.services.index')
      ->with('success', 'Layanan berhasil diubah.');
  }

  public function destroy(Services $service)
  {
    if ($service->submissions()->exists()) {
      return redirect()->route('admin.services.index')
        ->with('error', 'Layanan tidak dapat dihapus karena sudah memiliki data pengajuan.');
    }

    $service->delete();

    return redirect()->route('admin.services.index')
      ->with('success', 'Layanan berhasil dihapus.');
  }
}
