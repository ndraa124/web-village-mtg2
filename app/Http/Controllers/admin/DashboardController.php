<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'main'  => 'admin.dashboard.index'
        ];

        return view('admin.layout.template', $data);
    }
}
