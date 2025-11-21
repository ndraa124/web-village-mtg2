<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationStructure;
use App\Http\Requests\Organization\UpdateOrganizationStructureRequest;
use Illuminate\Support\Facades\Storage;

class OrganizationStructureController extends Controller
{
  public function index()
  {
    $orgStructure = OrganizationStructure::find(1);

    if (!$orgStructure) {
      $orgStructure = new OrganizationStructure();
      $orgStructure->id = 1;
      $orgStructure->save();
    }

    $data = [
      'title' => 'Struktur Organisasi',
      'main' => 'admin.content.profile.organization.structure.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Struktur Organisasi Pemerintah Desa'
        ],
      ],
      'structure' => $orgStructure
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(OrganizationStructure $structure)
  {
    $data = [
      'title' => 'Edit Struktur Organisasi Pemerintah Desa',
      'main' => 'admin.content.profile.organization.structure.edit',
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
          'route' => 'admin.content.profile.organization.structure.index',
          'title' => 'Struktur Organisasi Pemerintah Desa'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'structure' => $structure
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateOrganizationStructureRequest $request, OrganizationStructure $structure)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        if ($structure->image) {
          Storage::disk('public')->delete($structure->image);
        }

        $imagePath = $request->file('image')->store('organization_structure_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      $structure->update($validatedData);

      return redirect()->route('admin.content.profile.organization.structure.index')
        ->with('success', 'Struktur organisasi pemerintah desa berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
