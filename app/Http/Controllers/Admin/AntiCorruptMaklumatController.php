<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptMaklumat;
use App\Http\Requests\AntiCorrupt\UpdateMaklumatRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AntiCorruptMaklumatController extends Controller
{
  public function index()
  {
    $maklumat = AntiCorruptMaklumat::find(1);

    if (!$maklumat) {
      $maklumat = new AntiCorruptMaklumat();
      $maklumat->id = 1;
      $maklumat->content = "";
      $maklumat->user_id = Auth::id();
      $maklumat->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
      'main' => 'admin.content.anti_corrupt.maklumat.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.governance.index',
          'title' => 'Desa Anti Korupsi'
        ],
        [
          'title' => 'Desa Anti Korupsi BPD'
        ],
      ],
      'maklumat' => $maklumat
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptMaklumat $maklumat)
  {
    $data = [
      'title' => 'Edit Maklumat',
      'main' => 'admin.content.anti_corrupt.maklumat.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.governance.index',
          'title' => 'Desa Anti Korupsi'
        ],
        [
          'route' => 'admin.content.anti.maklumat.index',
          'title' => 'Maklumat'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'maklumat' => $maklumat
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateMaklumatRequest $request, AntiCorruptMaklumat $maklumat)
  {
    $validatedData = $request->validated();

    try {
      if ($request->hasFile('image')) {
        if ($maklumat->image) {
          Storage::disk('public')->delete($maklumat->image);
        }

        $imagePath = $request->file('image')->store('anti_corrupt_maklumat_images', 'public');
        $validatedData['image'] = $imagePath;
      }

      $maklumat->update($validatedData);

      return redirect()->route('admin.content.anti.maklumat.index')
        ->with('success', 'Maklumat berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
