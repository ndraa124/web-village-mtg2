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
        $remember = $request->boolean('remember');

        if (Auth::attempt($validateData, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
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
