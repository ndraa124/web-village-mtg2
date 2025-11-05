<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialAssistance;
use App\Http\Requests\Master\SocialAssistance\StoreSocialAssistanceRequest;
use Illuminate\Http\Request;

class SocialAssistanceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = SocialAssistance::query();

        $query->when($search, function ($q, $search) {
            return $q->where('social_assistance_name', 'like', "%{$search}%");
        });

        $social_assistances = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar Bantuan Sosial',
            'main' => 'admin.social_assistance.index',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'Bantuan Sosial',
                ]
            ],
            'social_assistances' => $social_assistances
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Bantuan Sosial',
            'main' => 'admin.social_assistance.create',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.social_assistance.index',
                    'title' => 'Bantuan Sosial',
                ],
                [
                    'title' => 'Tambah Bantuan Sosial',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreSocialAssistanceRequest $request)
    {
        $validatedData = $request->validated();

        try {
            SocialAssistance::create($validatedData);

            return redirect()->route('master.social_assistance.index')
                ->with('success', 'Bantuan Sosial berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function show(SocialAssistance $social_assistance)
    {
        $data = [
            'title' => 'Detail Bantuan Sosial',
            'main' => 'admin.social_assistance.show',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.social_assistance.index',
                    'title' => 'Bantuan Sosial',
                ],
                [
                    'title' => 'Detail Bantuan Sosial',
                ]
            ],
            'social_assistance' => $social_assistance
        ];

        return view('admin.layout.template', $data);
    }

    public function edit(SocialAssistance $social_assistance)
    {
        $data = [
            'title' => 'Edit Bantuan Sosial',
            'main' => 'admin.social_assistance.edit',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'master.social_assistance.index',
                    'title' => 'Bantuan Sosial',
                ],
                [
                    'title' => 'Edit Bantuan Sosial',
                ]
            ],
            'social_assistance' => $social_assistance
        ];

        return view('admin.layout.template', $data);
    }

    public function update(StoreSocialAssistanceRequest $request, SocialAssistance $social_assistance)
    {
        $validatedData = $request->validated();

        $social_assistance->update($validatedData);

        return redirect()->route('master.social_assistance.index')
            ->with('success', 'Bantuan Sosial berhasil diperbarui.');
    }

    public function destroy(SocialAssistance $social_assistance)
    {
        $social_assistance->delete();

        return redirect()->route('master.social_assistance.index')
            ->with('success', 'Bantuan Sosial berhasil dihapus.');
    }
}
