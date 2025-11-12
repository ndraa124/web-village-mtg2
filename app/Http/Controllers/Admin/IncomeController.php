<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Http\Requests\Master\Income\StoreIncomeRequest;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = Income::query();

    $query->when($search, function ($q, $search) {
      return $q->where('income_name', 'like', "%{$search}%");
    });

    $incomes = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Pendapatan',
      'main' => 'admin.master.income.index',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'title' => 'Pendapatan',
        ]
      ],
      'incomes' => $incomes
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Tambah Pendapatan',
      'main' => 'admin.master.income.create',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.income.index',
          'title' => 'Pendapatan',
        ],
        [
          'title' => 'Tambah Pendapatan',
        ]
      ]
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreIncomeRequest $request)
  {
    $validatedData = $request->validated();

    try {
      Income::create($validatedData);

      return redirect()->route('admin.master.income.index')
        ->with('success', 'Pendapatan berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function edit(Income $income)
  {
    $data = [
      'title' => 'Edit Pendapatan',
      'main' => 'admin.master.income.edit',
      'breadcrumbs' => [
        [
          'route' => 'admin.dashboard',
          'title' => 'Dashboard',
        ],
        [
          'route' => 'admin.master.income.index',
          'title' => 'Pendapatan',
        ],
        [
          'title' => 'Edit Pendapatan',
        ]
      ],
      'income' => $income
    ];

    return view('admin.layout.template', $data);
  }

  public function update(StoreIncomeRequest $request, Income $income)
  {
    $validatedData = $request->validated();

    $income->update($validatedData);

    return redirect()->route('admin.master.income.index')
      ->with('success', 'Pendapatan berhasil diperbarui.');
  }

  public function destroy(Income $income)
  {
    $income->delete();

    return redirect()->route('admin.master.income.index')
      ->with('success', 'Pendapatan berhasil dihapus.');
  }
}
