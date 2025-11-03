<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfographicsSocialAssistance;
use App\Models\SocialAssistance;
use App\Http\Requests\Infographics\SocialAssistance\StoreSocialAssistanceRequest;
use App\Http\Requests\Infographics\SocialAssistance\UpdateSocialAssistanceRequest;
use Illuminate\Http\Request;

class InfographicsSocialAssistanceController extends Controller
{
  public function index(Request $request)
  {
    $search = $request->input('search');

    $query = InfographicsSocialAssistance::with('socialAssistance');

    $query->when($search, function ($q, $search) {
      return $q->whereHas('socialAssistance', function ($sq) use ($search) {
        $sq->where('social_assistance_name', 'like', "%{$search}%");
      });
    });

    $socialAssistances = $query->latest()
      ->paginate(10)
      ->appends($request->query());

    $data = [
      'title' => 'Daftar Bantuan Sosial',
      'main' => 'admin.infographics.social_assistance.index',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'title' => 'Daftar Bantuan Sosial'
        ],
      ],
      'socialAssistances' => $socialAssistances
    ];

    return view('admin.layout.template', $data);
  }

  public function create()
  {
    $existingSocialAssistanceIds = InfographicsSocialAssistance::pluck('social_assistance_id');

    $socialAssistances = SocialAssistance::whereNotIn('id', $existingSocialAssistanceIds)
      ->orderBy('social_assistance_name', 'asc')
      ->get();

    $data = [
      'title' => 'Tambah Data Bantuan Sosial',
      'main' => 'admin.infographics.social_assistance.create',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.social_assistance.index',
          'title' => 'Daftar Bantuan Sosial'
        ],
        ['title' => 'Tambah Data'],
      ],
      'socialAssistances' => $socialAssistances
    ];

    return view('admin.layout.template', $data);
  }

  public function store(StoreSocialAssistanceRequest $request)
  {
    $validatedData = $request->validated();

    try {
      InfographicsSocialAssistance::create($validatedData);

      return redirect()->route('infographics.social_assistance.index')
        ->with('success', 'Data Bantuan Sosial berhasil ditambahkan.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
    }
  }

  public function show(InfographicsSocialAssistance $socialAssistance)
  {
    $socialAssistance->load('socialAssistance');

    $data = [
      'title' => 'Detail Data Bantuan Sosial',
      'main' => 'admin.infographics.social_assistance.show',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.social_assistance.index',
          'title' => 'Daftar Bantuan Sosial'
        ],
        [
          'title' => 'Detail Data'
        ],
      ],
      'socialAssistance' => $socialAssistance
    ];

    return view('admin.layout.template', $data);
  }

  public function edit(InfographicsSocialAssistance $socialAssistance)
  {
    $addedSocialAssistanceIds = InfographicsSocialAssistance::where('id', '!=', $socialAssistance->id)
      ->pluck('social_assistance_id');

    $socialAssistances = SocialAssistance::whereNotIn('id', $addedSocialAssistanceIds)
      ->orderBy('social_assistance_name', 'asc')
      ->get();

    $data = [
      'title' => 'Edit Data Bantuan Sosial',
      'main' => 'admin.infographics.social_assistance.edit',
      'breadcrumbs' => [
        [
          'route' => 'dashboard',
          'title' => 'Dashboard'
        ],
        [
          'route' => 'infographics.social_assistance.index',
          'title' => 'Daftar Bantuan Sosial'
        ],
        [
          'title' => 'Edit Data'
        ],
      ],
      'socialAssistance' => $socialAssistance,
      'socialAssistances' => $socialAssistances
    ];

    return view('admin.layout.template', $data);
  }

  public function update(UpdateSocialAssistanceRequest $request, InfographicsSocialAssistance $socialAssistance)
  {
    $validatedData = $request->validated();

    try {
      $socialAssistance->update($validatedData);

      return redirect()->route('infographics.social_assistance.index')
        ->with('success', 'Data Bantuan Sosial berhasil diperbarui.');
    } catch (\Exception $e) {
      return back()->withInput()->with('error', 'Gagal memperbarui data. Error: ' . $e->getMessage());
    }
  }

  public function destroy(InfographicsSocialAssistance $socialAssistance)
  {
    try {
      $socialAssistance->delete();

      return redirect()->route('infographics.social_assistance.index')
        ->with('success', 'Data Bantuan Sosial berhasil dihapus.');
    } catch (\Exception $e) {
      return back()->with('error', 'Gagal menghapus data. Error: ' . $e->getMessage());
    }
  }
}
