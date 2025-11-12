<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsApbdIncome;
use App\Models\Income;
use App\Http\Requests\Infographics\ApbdIncome\StoreApbdIncomeRequest;
use App\Http\Requests\Infographics\ApbdIncome\UpdateApbdIncomeRequest;
use Illuminate\Http\Request;

class InfographicsApbdIncomeController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsApbdIncome::with('income');

    $query->when($search, function ($q, $search) {
      return $q->where('year', 'like', "%{$search}%")
        ->orWhereHas('income', function ($sq) use ($search) {
          $sq->where('income_name', 'like', "%{$search}%");
        });
    });

    $apbdIncomes = $query->latest('year')
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Pendapatan APBD',
      'main' => 'admin.infographics.apbd_income.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Pendapatan APBD'
        ],
      ],
      'apbdIncomes' => $apbdIncomes
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $incomes = Income::orderBy('income_name', 'asc')->get();

    $data = [
      'title' => 'Tambah Data Pendapatan APBD',
      'main' => 'admin.infographics.apbd_income.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.income.index',
          'title' => 'Daftar Pendapatan APBD'
        ],
        [
          'title' => 'Tambah Data'
        ],
      ],
      'incomes' => $incomes
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreApbdIncomeRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsApbdIncome::create($validatedData);

      return redirect()->route('admin.infographics.apbd.income.index')
        ->with('success', 'Data Pendapatan APBD berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(InfographicsApbdIncome $apbdIncome)
  {
    $incomes = Income::orderBy('income_name', 'asc')->get();

    $data = [
      'title' => 'Edit Data Pendapatan APBD',
      'main' => 'admin.infographics.apbd_income.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'admin.infographics.apbd.income.index',
          'title' => 'Daftar Pendapatan APBD'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'apbdIncome' => $apbdIncome,
      'incomes' => $incomes
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateApbdIncomeRequest $request, InfographicsApbdIncome $apbdIncome)
  {
    $validatedData = $request->validated();

    try {
      $apbdIncome->update($validatedData);

      return redirect()->route('admin.infographics.apbd.income.index')
        ->with('success', 'Data Pendapatan APBD berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsApbdIncome $apbdIncome)
  {
    try {
      $apbdIncome->delete();

      return redirect()->route('admin.infographics.apbd.income.index')
        ->with('success', 'Data Pendapatan APBD berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
