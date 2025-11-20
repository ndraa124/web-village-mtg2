<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsStunting;
use App\Models\Stunting;
use App\Http\Requests\Infographics\Stunting\StoreStuntingRequest;
use App\Http\Requests\Infographics\Stunting\UpdateStuntingRequest;
use Illuminate\Http\Request;

class InfographicsStuntingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsStunting::with('stunting');

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhereHas('stunting', function ($sq) use ($search) {
          $sq->where('stunting_name', 'like', "%{$search}%");
        });
    });

    $stuntings = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Infografis Stunting',
      'main' => 'admin.infographics.stunting.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Infografis Stunting'
        ],
      ],
      'stuntings' => $stuntings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $stuntings = Stunting::orderBy('stunting_name', 'asc')->get();

    $data = [
      'title' => 'Tambah Data',
      'main' => 'admin.infographics.stunting.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.stunting.index',
          'title' => 'Infografis Stunting'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'stuntings' => $stuntings
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreStuntingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsStunting::create($validatedData);

      return redirect()->route('admin.infographics.stunting.index')
        ->with('success', 'Data Stunting berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsStunting $stunting)
  {
    $stuntings = Stunting::orderBy('stunting_name', 'asc')->get();

    $data = [
      'title' => 'Edit Data',
      'main' => 'admin.infographics.stunting.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.stunting.index',
          'title' => 'Infografis Stunting'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'stunting' => $stunting,
      'stuntings' => $stuntings
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateStuntingRequest $request, InfographicsStunting $stunting)
  {
    $validatedData = $request->validated();

    try {
      $stunting->update($validatedData);

      return redirect()->route('admin.infographics.stunting.index')
        ->with('success', 'Data Stunting berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsStunting $stunting)
  {
    try {
      $stunting->delete();

      return redirect()->route('admin.infographics.stunting.index')
        ->with('success', 'Data Stunting berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
