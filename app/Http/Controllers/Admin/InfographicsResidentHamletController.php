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
      'title' => 'Infografis Penduduk',
      'main' => 'admin.infographics.resident_hamlet.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Jaga',
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
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.resident_hamlet.create',
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
          'route' => 'admin.infographics.resident.hamlet.index',
          'title' => 'Jaga',
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

      return redirect()->route('admin.infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per jaga berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsResidentHamlet $residentHamlet)
  {
    $addedHamletIds = InfographicsResidentHamlet::where('id', '!=', $residentHamlet->id)
      ->pluck('hamlet_id');

    $hamlets = Hamlet::whereNotIn('id', $addedHamletIds)->get();

    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.resident_hamlet.edit',
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
          'route' => 'admin.infographics.resident.hamlet.index',
          'title' => 'Jaga',
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

      return redirect()->route('admin.infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per jaga berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsResidentHamlet $residentHamlet)
  {
    try {
      $residentHamlet->delete();

      return redirect()->route('admin.infographics.resident.hamlet.index')
        ->with('success', 'Data penduduk per jaga berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
