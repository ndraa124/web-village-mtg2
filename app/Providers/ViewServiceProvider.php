<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
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
            $totalVisitors = Visitor::count();
            $todayVisitors = Visitor::whereDate('created_at', Carbon::today())->count();

            $minutesToConsiderOnline = 15;
            $onlineVisitors = DB::table('sessions')
                ->where('last_activity', '>', Carbon::now()->subMinutes($minutesToConsiderOnline))
                ->count();

            $view->with([
                'totalVisitors'  => $totalVisitors,
                'todayVisitors'  => $todayVisitors,
                'onlineVisitors' => $onlineVisitors,
            ]);
        });
    }
}
