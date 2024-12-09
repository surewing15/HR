<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    public function handle(Request $request, Closure $next, $type)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        if (!auth()->user()->hasUserType($type)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}