<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class AdminControls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {
            $user = User::where('id',Auth::id())->first()->roles()->first()->slug;
            if ($user === "admin") {
                return $next($request);
            } elseif($user === "user") {
                return redirect('/user');
            }
        }else{
            return redirect('/');

        }
    }
}
