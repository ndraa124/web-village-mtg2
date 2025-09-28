<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LoginRequest;

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
        $request->validate([
            'custom' => [
                'nik' => [
                    'required' => 'We need to know your email address!',
                    'number' => 'Your email address is too long!'
                ],
            ],
        ]);

        $validateData = $request->only('nik', 'password');

        if (Auth::attempt($validateData)) {
            return redirect()->intended('dashboard');
        }

        return back()
            ->withErrors(['error' => 'The provide credentials do not match our records!'])
            ->onlyInput('nik');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
