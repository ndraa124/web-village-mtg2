<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = User::query();

        $query->when($search, function ($q, $search) {
            return $q->where('name', 'like', "%{$search}%")
                ->orWhere('nik', 'like', "%{$search}%");
        });

        $users = $query->latest()
            ->paginate(10)
            ->appends($request->query());

        $data = [
            'title' => 'Daftar User',
            'main' => 'admin.users.index',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'title' => 'User',
                ]
            ],
            'users' => $users
        ];

        return view('admin.layout.template', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah User',
            'main' => 'admin.users.create',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'users.index',
                    'title' => 'User',
                ],
                [
                    'title' => 'Tambah User',
                ]
            ]
        ];

        return view('admin.layout.template', $data);
    }

    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validated();

        try {
            User::create($validatedData);

            return redirect()->route('users.index')
                ->with('success', 'User berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Gagal menyimpan data. Error: ' . $e->getMessage());
        }
    }

    public function show(User $user)
    {
        $data = [
            'title' => 'Detail User',
            'main' => 'admin.users.show',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'users.index',
                    'title' => 'Users',
                ],
                [
                    'title' => 'Detail User',
                ]
            ],
            'user' => $user
        ];

        return view('admin.layout.template', $data);
    }

    public function edit(User $user)
    {
        $data = [
            'title' => 'Edit User',
            'main' => 'admin.users.edit',
            'breadcrumbs' => [
                [
                    'route' => 'dashboard',
                    'title' => 'Dashboard',
                ],
                [
                    'route' => 'users.index',
                    'title' => 'User',
                ],
                [
                    'title' => 'Edit User',
                ]
            ],
            'user' => $user
        ];

        return view('admin.layout.template', $data);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $validatedData = $request->validated();

        if (empty($validatedData['password'])) {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
