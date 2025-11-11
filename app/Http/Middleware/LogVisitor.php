<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $today = Carbon::today();

        $existingVisitor = Visitor::where('ip_address', $ip)
            ->whereDate('created_at', $today)
            ->exists();

        if (!$existingVisitor) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(),
            ]);
        }

        return $next($request);
    }
}
