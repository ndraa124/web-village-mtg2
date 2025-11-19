<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceSubmission;
use App\Models\InfographicsResident;
use App\Models\Visitor;
use App\Models\InfographicsApbdIncome;
use App\Models\InfographicsApbdShopping;
use App\Models\OrganizationOfficials;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $selectedYear = $request->input('year', date('Y'));

        $availableYears = InfographicsApbdIncome::select('year')
            ->distinct()
            ->orderBy('year')
            ->pluck('year');

        if ($availableYears->isEmpty()) {
            $availableYears = collect([date('Y')]);
        }

        $totalPopulation = InfographicsResident::sum('t_man') + InfographicsResident::sum('t_woman');
        $pendingServices = ServiceSubmission::where('status', 'pending')->count();
        $todayVisitors   = Visitor::whereDate('created_at', Carbon::today())->count();

        $totalIncome   = InfographicsApbdIncome::where('year', $selectedYear)->sum('budget');
        $totalShopping = InfographicsApbdShopping::where('year', $selectedYear)->sum('budget');

        $recentSubmissions = ServiceSubmission::with('service')->latest()->take(10)->get();
        $officials = OrganizationOfficials::with('position')->take(5)->get();
        $totalMale = InfographicsResident::sum('t_man');
        $totalFemale = InfographicsResident::sum('t_woman');

        $data = [
            'title' => 'Dashboard',
            'main' => 'admin.dashboard.index',
            'breadcrumbs' => [],
            'selectedYear' => $selectedYear,
            'availableYears' => $availableYears,
            'totalPopulation' => $totalPopulation,
            'pendingServices' => $pendingServices,
            'todayVisitors' => $todayVisitors,
            'totalIncome' => $totalIncome,
            'totalShopping' => $totalShopping,
            'recentSubmissions' => $recentSubmissions,
            'officials' => $officials,
            'totalMale' => $totalMale,
            'totalFemale' => $totalFemale
        ];

        return view('admin.layout.template', $data);
    }
}
