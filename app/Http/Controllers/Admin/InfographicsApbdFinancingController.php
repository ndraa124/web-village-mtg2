<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbdFinancing;
use App\Models\Financing;
use App\Http\Requests\Infographics\ApbdFinancing\StoreApbdFinancingRequest;
use App\Http\Requests\Infographics\ApbdFinancing\UpdateApbdFinancingRequest;
use Illuminate\Http\Request;

class InfographicsApbdFinancingController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbdFinancing::with('financing');

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhereHas('financing', function ($sq) use ($search) {
          $sq->where('financing_name', 'like', "%{$search}%");
        });
    });

    $apbdFinancings = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Pembiayaan APBD',
      'main' => 'admin.infographics.apbd_financing.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Pembiayaan APBD'
        ],
      ],
      'apbdFinancings' => $apbdFinancings
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $financings = Financing::orderBy('financing_name', 'asc')->get();

    $data = [
      'title' => 'Tambah Data Pembiayaan APBD',
      'main' => 'admin.infographics.apbd_financing.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.financing.index',
          'title' => 'Daftar Pembiayaan APBD'
        ],
        ['title' => 'Tambah Data'],
      ],
      'financings' => $financings
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdFinancingRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdFinancing::create($validatedData);

      return redirect()->route('admin.infographics.apbd.financing.index')
        ->with('success', 'Data Pembiayaan APBD berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsApbdFinancing $apbdFinancing)
  {
    $financings = Financing::orderBy('financing_name', 'asc')->get();

    $data = [
      'title' => 'Edit Data Pembiayaan APBD',
      'main' => 'admin.infographics.apbd_financing.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.financing.index',
          'title' => 'Daftar Pembiayaan APBD'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbdFinancing' => $apbdFinancing,
      'financings' => $financings
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdFinancingRequest $request, InfographicsApbdFinancing $apbdFinancing)
  {
    $validatedData = $request->validated();

    try {
      $apbdFinancing->update($validatedData);

      return redirect()->route('admin.infographics.apbd.financing.index')
        ->with('success', 'Data Pembiayaan APBD berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdFinancing $apbdFinancing)
  {
    try {
      $apbdFinancing->delete();

      return redirect()->route('admin.infographics.apbd.financing.index')
        ->with('success', 'Data Pembiayaan APBD berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
