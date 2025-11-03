<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentHamlet;
use App\Models\Hamlet;
use App\Http\Requests\Infographics\ResidentHamlet\StoreResidentHamletRequest;
use App\Http\Requests\Infographics\ResidentHamlet\UpdateResidentHamletRequest;
use Illuminate\Http\Request;

class InfographicsResidentHamletController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentHamlet::with('hamlet');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('hamlet', function ($subQ) use ($search) {
        $subQ->where('hamlet_name', 'like', "%{$search}%");
      });
    });

    $residentHamlets = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Penduduk per Dusun',
      'main' => 'admin.infographics.resident_hamlet.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Penduduk per Dusun',
        ]
      ],
      'residentHamlets' => $residentHamlets
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $addedHamletIds = InfographicsResidentHamlet::pluck('hamlet_id');
    $hamlets = Hamlet::whereNotIn('id', $addedHamletIds)->get();

    $data = [
      'title' => 'Tambah Data Dusun',
      'main' => 'admin.infographics.resident_hamlet.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.hamlet.index',
          'title' => 'Penduduk per Dusun',
        ],
        [
          'title' => 'Tambah Data',
        ]
      ],
      'hamlets' => $hamlets
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentHamletRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentHamlet::create($validatedData);

      return redirect()->route('infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per dusun berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsResidentHamlet $residentHamlet)
  {
    $residentHamlet->load('hamlet');

    $data = [
      'title' => 'Detail Penduduk per Dusun',
      'main' => 'admin.infographics.resident_hamlet.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.hamlet.index',
          'title' => 'Penduduk per Dusun',
        ],
        [
          'title' => 'Detail Data',
        ]
      ],
      'residentHamlet' => $residentHamlet
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsResidentHamlet $residentHamlet)
  {
    $addedHamletIds = InfographicsResidentHamlet::where('id', '!=', $residentHamlet->id)
      ->pluck('hamlet_id');

    $hamlets = Hamlet::whereNotIn('id', $addedHamletIds)->get();

    $data = [
      'title' => 'Edit Penduduk per Dusun',
      'main' => 'admin.infographics.resident_hamlet.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.hamlet.index',
          'title' => 'Penduduk per Dusun',
        ],
        [
          'title' => 'Edit Data',
        ]
      ],
      'residentHamlet' => $residentHamlet,
      'hamlets' => $hamlets
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateResidentHamletRequest $request, InfographicsResidentHamlet $residentHamlet)
  {
    $validatedData = $request->validated();

    try {
      $residentHamlet->update($validatedData);

      return redirect()->route('infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per dusun berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentHamlet $residentHamlet)
  {
    try {
      $residentHamlet->delete();

      return redirect()->route('infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per dusun berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
