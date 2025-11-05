<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login',
            'main'  => 'admin.auth.login'
        ];

        return view('admin.auth.index', $data);
    }

    public function login(LoginRequest $request)
    {
        $validateData = $request->validated();

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }

        return back()
            ->withErrors(['error' => 'NIK atau password anda salah!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
