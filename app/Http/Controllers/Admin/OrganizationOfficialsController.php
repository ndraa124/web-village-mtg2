<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationOfficials;
use App\Models\VillageOfficialPosition;
use App\Http\Requests\Organization\StoreOrganizationOfficialsRequest;
use App\Http\Requests\Organization\UpdateOrganizationOfficialsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationOfficialsController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = OrganizationOfficials::query();

    $query->when($search, function ($q, $search) {
      return $q->where('name', 'like', "%{$search}%");
    });

    $officials = $query->orderBy('order', 'asc')
      ->orderBy('name', 'asc')
      ->paginate(20)
      ->appends($request->query());

    $data = [
      'title' => 'Struktur Organisasi',
      'main' => 'admin.content.profile.organization.officials.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Aparatur Desa'
        ],
      ],
      'officials' => $officials
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $usedPositionIds = OrganizationOfficials::pluck('officials_position_id');
    $positions = VillageOfficialPosition::whereNotIn('id', $usedPositionIds)
      ->orderBy('position_name')
      ->get();

    $data = [
      'title' => 'Tambah Aparatur Desa',
      'main' => 'admin.content.profile.organization.officials.create',
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
          'route' => 'admin.content.profile.organization.officials.index',
          'title' => 'Aparatur Desa'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'positions' => $positions
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreOrganizationOfficialsRequest $request)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('organization_officials_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      OrganizationOfficials::create($validatedData);

      return redirect()->route('admin.content.profile.organization.officials.index')
        ->with('success', 'Data aparatur desa berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menambahkan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(OrganizationOfficials $official)
  {
    $usedPositionIds = OrganizationOfficials::where('id', '!=', $official->id)
      ->pluck('officials_position_id');
    $positions = VillageOfficialPosition::whereNotIn('id', $usedPositionIds)
      ->orderBy('position_name')
      ->get();

    $data = [
      'title' => 'Edit Aparatur Desa',
      'main' => 'admin.content.profile.organization.officials.edit',
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
          'route' => 'admin.content.profile.organization.officials.index',
          'title' => 'Aparatur Desa'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'official' => $official,
      'positions' => $positions
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateOrganizationOfficialsRequest $request, OrganizationOfficials $official)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        if ($official->image) {
          Storage::disk('public')->delete($official->image);
        }

        $imagePath = $request->file('image')->store('organization_officials_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      $official->update($validatedData);

      return redirect()->route('admin.content.profile.organization.officials.index')
        ->with('success', 'Data aparatur desa berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(OrganizationOfficials $official)
  {
    try {
      if ($official->image) {
        Storage::disk('public')->delete($official->image);
      }

      $official->delete();

      return redirect()->route('admin.content.profile.organization.officials.index')
        ->with('success', 'Data aparatur desa berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
