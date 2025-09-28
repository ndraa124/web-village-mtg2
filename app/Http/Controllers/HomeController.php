<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'main'  => 'main.home.index',
        ];

        return view('main.layout.template', $data);
    }
}
