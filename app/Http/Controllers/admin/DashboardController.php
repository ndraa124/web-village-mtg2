<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'main' => 'admin.dashboard.index',
            'breadcrumbs' => [],
        ];

        return view('admin.layout.template', $data);
    }
}
