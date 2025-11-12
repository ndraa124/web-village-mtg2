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
    $antiCorrupt = AntiCorruptGovernance::find(1);

    if (!$antiCorrupt) {
      $antiCorrupt = new AntiCorruptGovernance();
      $antiCorrupt->id = 1;
      $antiCorrupt->content = "";
      $antiCorrupt->user_id = Auth::id();
      $antiCorrupt->save();
    }

    $data = [
      'title' => 'Anti Korupsi - Tata Laksana',
      'main' => 'admin.content.anti_corrupt.governance.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Tata Laksana'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(AntiCorruptGovernance $antiCorrupt)
  {
    $data = [
      'title' => 'Edit Anti Korupsi - Tata Laksana',
      'main' => 'admin.content.anti_corrupt.governance.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.content.anti.governance.index',
          'title' => 'Anti Korupsi - Tata Laksana'
        ],
        [
          'title' => 'Edit'
        ],
      ],
      'antiCorrupt' => $antiCorrupt
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreAntiCorruptRequest $request, AntiCorruptGovernance $antiCorrupt)
  {
    $validatedData = $request->validated();

    try {
      $antiCorrupt->update($validatedData);

      return redirect()->route('admin.content.anti.governance.index')
        ->with('success', 'Tata laksana berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }
}
