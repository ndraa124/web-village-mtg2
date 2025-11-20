<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResident;
use App\Http\Requests\Infographics\Resident\UpdateResidentRequest;
use Illuminate\Support\Facades\DB;

class InfographicsResidentController extends Controller
{
  public function index()
  {
    $resident = InfographicsResident::find(1);

    if (!$resident) {
      $resident = new InfographicsResident();
      $resident->id = 1;
      $resident->t_resident = 0;
      $resident->t_man = 0;
      $resident->t_woman = 0;
      $resident->t_head_of_family = 0;
      $resident->t_temporary = 0;
      $resident->t_mutation = 0;
      $resident->save();
    }

    $data = [
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Penduduk',
        ]
      ],
      'resident' => $resident
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsResident $resident)
  {
    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Infografis Penduduk',
        ],
        [
          'route' => 'admin.infographics.resident.index',
          'title' => 'Penduduk',
        ],
        [
          'title' => 'Edit Data',
        ]
      ],
      'resident' => $resident
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentRequest $request, InfographicsResident $resident)
  {
    $validatedData = $request->validated();

    DB::beginTransaction();

    try {
      $resident->update($validatedData);
      DB::commit();

      return redirect()->route('admin.infographics.resident.index')
        ->with('success', 'Data infografis kependudukan berhasil diperbarui.');
    } catch (\Exception $e) {
      DB::rollBack();
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }
}
