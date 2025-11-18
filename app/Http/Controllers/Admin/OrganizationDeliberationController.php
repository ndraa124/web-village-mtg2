<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationDeliberation;
use App\Http\Requests\Organization\UpdateOrganizationDeliberationRequest;
use Illuminate\Support\Facades\Storage;

class OrganizationDeliberationController extends Controller
{
  public function index()
  {
    $orgDeliberation = OrganizationDeliberation::find(1);

    if (!$orgDeliberation) {
      $orgDeliberation = new OrganizationDeliberation();
      $orgDeliberation->id = 1;
      $orgDeliberation->save();
    }

    $data = [
      'title' => 'Struktur Organisasi',
      'main' => 'admin.content.profile.organization.deliberation.index',
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
          'title' => 'Struktur Organisasi BPD'
        ],
      ],
      'deliberation' => $orgDeliberation
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(OrganizationDeliberation $deliberation)
  {
    $data = [
      'title' => 'Edit Struktur Organisasi',
      'main' => 'admin.content.profile.organization.deliberation.edit',
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
          'route' => 'admin.content.profile.organization.deliberation.index',
          'title' => 'Struktur Organisasi BPD'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'deliberation' => $deliberation
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateOrganizationDeliberationRequest $request, OrganizationDeliberation $deliberation)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        if ($deliberation->image) {
          Storage::disk('public')->delete($deliberation->image);
        }

        $imagePath = $request->file('image')->store('organization_deliberation_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      $deliberation->update($validatedData);

      return redirect()->route('admin.content.profile.organization.deliberation.index')
        ->with('success', 'Struktur organisasi badan permusyawaratan desa berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
