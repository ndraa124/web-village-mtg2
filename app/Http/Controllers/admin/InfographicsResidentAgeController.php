<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsResidentAge;
use App\Models\Gender;
use App\Http\Requests\Infographics\ResidentAge\StoreResidentAgeRequest;
use Illuminate\Http\Request;

class InfographicsResidentAgeController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsResidentAge::with('gender');

    $query->when($search, function ($q, $search) {
      return $q->where('age', 'like', "%{$search}%")
        ->orWhereHas('gender', function ($subQ) use ($search) {
          $subQ->where('gender_name', 'like', "%{$search}%");
        });
    });

    $ages = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Kelompok Umur Penduduk',
      'main' => 'admin.infographics.resident_age.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Kelompok Umur Penduduk',
        ]
      ],
      'ages' => $ages
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Kelompok Umur',
      'main' => 'admin.infographics.resident_age.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.age.index',
          'title' => 'Kelompok Umur Penduduk',
        ],
        [
          'title' => 'Tambah Kelompok Umur',
        ]
      ],
      'genders' => Gender::all()
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreResidentAgeRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsResidentAge::create($validatedData);

      return redirect()->route('infographics.resident.age.index')
        ->with('success', 'Data kelompok umur berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsResidentAge $age)
  {
    $age->load('gender');

    $data = [
      'title' => 'Detail Kelompok Umur',
      'main' => 'admin.infographics.resident_age.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.age.index',
          'title' => 'Kelompok Umur Penduduk',
        ],
        [
          'title' => 'Detail Kelompok Umur',
        ]
      ],
      'age' => $age
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsResidentAge $age)
  {
    $age->load('gender');

    $data = [
      'title' => 'Edit Kelompok Umur',
      'main' => 'admin.infographics.resident_age.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'infographics.resident.age.index',
          'title' => 'Kelompok Umur Penduduk',
        ],
        [
          'title' => 'Edit Kelompok Umur',
        ]
      ],
      'age' => $age,
      'genders' => Gender::all()
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreResidentAgeRequest $request, InfographicsResidentAge $age)
  {
    $validatedData = $request->validated();

    $age->update($validatedData);

    return redirect()->route('infographics.resident.age.index')
      ->with('success', 'Data kelompok umur berhasil diperbarui.');
  }

  public function destroy(InfographicsResidentAge $age)
  {
    $age->delete();

    return redirect()->route('infographics.resident.age.index')
      ->with('success', 'Data kelompok umur berhasil dihapus.');
  }
}
