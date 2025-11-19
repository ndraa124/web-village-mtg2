<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationFunctionOfficial;
use App\Http\Requests\Organization\StoreOrganizationFunctionRequest;
use App\Http\Requests\Organization\UpdateOrganizationFunctionRequest;
use Illuminate\Http\Request;

class OrganizationFunctionController extends Controller
{
  public function index(Request $request)
  {
    $query = OrganizationFunctionOfficial::query();

    if ($request->has('search')) {
      $query->where('position_name', 'like', '%' . $request->search . '%');
    }

    $functions = $query->orderBy('created_at', 'asc')
      ->paginate(10);

    $data = [
      'title' => 'Struktur Organisasi',
      'main' => 'admin.content.profile.organization.function.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.organization.structure.index',
          'title' => 'Struktur Organisasi'
        ],
        [
          'title' => 'Tupoksi Aparatur Desa'
        ],
      ],
      'functions' => $functions
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Tupoksi',
      'main' => 'admin.content.profile.organization.function.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.organization.structure.index',
          'title' => 'Struktur Organisasi'
        ],
        [
          'route' => 'admin.content.profile.organization.function-officials.index',
          'title' => 'Tupoksi Aparatur Desa'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreOrganizationFunctionRequest $request)
  {
    OrganizationFunctionOfficial::create($request->validated());

    return redirect()->route('admin.content.profile.organization.function-officials.index')
      ->with('success', 'Tupoksi berhasil ditambahkan.');
  }

  public function show(OrganizationFunctionOfficial $function)
  {
    $data = [
      'title' => 'Detail Tupoksi',
      'main' => 'admin.content.profile.organization.function.show',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.organization.structure.index',
          'title' => 'Struktur Organisasi'
        ],
        [
          'route' => 'admin.content.profile.organization.function-officials.index',
          'title' => 'Tupoksi Aparatur Desa'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'function' => $function
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(OrganizationFunctionOfficial $function)
  {
    $data = [
      'title' => 'Edit Tupoksi',
      'main' => 'admin.content.profile.organization.function.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.profile.organization.structure.index',
          'title' => 'Struktur Organisasi'
        ],
        [
          'route' => 'admin.content.profile.organization.function-officials.index',
          'title' => 'Tupoksi Aparatur Desa'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'function' => $function
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateOrganizationFunctionRequest $request, OrganizationFunctionOfficial $function)
  {
    $function->update($request->validated());

    return redirect()->route('admin.content.profile.organization.function-officials.index')
      ->with('success', 'Tupoksi berhasil diperbarui.');
  }

  public function destroy(OrganizationFunctionOfficial $function)
  {
    $function->delete();

    return redirect()->route('admin.content.profile.organization.function-officials.index')
      ->with('success', 'Tupoksi berhasil dihapus.');
  }
}
