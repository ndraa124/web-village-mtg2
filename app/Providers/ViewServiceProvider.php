<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Village;
use App\Models\Services;
use App\Models\Visitor;
use Carbon\Carbon;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $village = Village::where('is_active', true)->firstOrFail();
            $services = Services::orderBy('title', 'asc')->limit(4)->get();

            $totalVisitors = Visitor::count();

            $today = Carbon::today();
            $yesterday = Carbon::yesterday();

            $todayVisitors = Visitor::whereDate('created_at', $today)->count();
            $yesterdayVisitors = Visitor::whereDate('created_at', $yesterday)->count();
            $monthVisitors = Visitor::whereMonth('created_at', Carbon::now()->month)
                ->whereYear('created_at', Carbon::now()->year)
                ->count();

            $view->with([
                'totalVisitors'  => $totalVisitors,
                'monthVisitors'  => $monthVisitors,
                'yesterdayVisitors' => $yesterdayVisitors,
                'todayVisitors'  => $todayVisitors,
                'village' => $village,
                'servicesFooter' => $services,
            ]);
        });
    }
}
