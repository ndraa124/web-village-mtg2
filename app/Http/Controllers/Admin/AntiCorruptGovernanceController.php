<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AntiCorruptGovernance;
use App\Http\Requests\AntiCorrupt\StoreAntiCorruptRequest;
use Illuminate\Support\Facades\Auth;

class AntiCorruptGovernanceController extends Controller
{
  public function index()
  {
    $governance = AntiCorruptGovernance::find(1);

    if (!$governance) {
      $governance = new AntiCorruptGovernance();
      $governance->id = 1;
      $governance->content = "";
      $governance->user_id = Auth::id();
      $governance->save();
    }

    $data = [
      'title' => 'Desa Anti Korupsi',
      'main' => 'admin.content.anti_corrupt.governance.index',
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
          'title' => 'Tata Laksana'
        ],
      ],
      'governance' => $governance
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptGovernance $governance)
  {
    $data = [
      'title' => 'Edit Tata Laksana',
      'main' => 'admin.content.anti_corrupt.governance.edit',
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
          'route' => 'admin.content.anti.governance.index',
          'title' => 'Tata Laksana'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'governance' => $governance
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptGovernance $governance)
  {
    $validatedData = $request->validated();

    try {
      $governance->update($validatedData);

      return redirect()->route('admin.content.anti.governance.index')
        ->with('success', 'Tata laksana berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
