<?php

namespace App\Http\Middleware;

use App\Models\News;
use Closure;
use Illuminate\Http\Request;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ?string $role = null)
    {
        if ($role == News::ROLE_ADMIN && $request->has('test')) {
            abort(403);
        }
        return $next($request);
    }
}
