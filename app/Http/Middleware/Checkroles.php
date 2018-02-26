<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Checkroles
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
        // if($request->user() === null){
        //     return response("Insufficient permissions",401);
        // }

        // $actions = $request->route()->getAction();
        // $roles= isset($actions['roles']) ? $actions['roles'] : null;
        // if ($request->user()->hasAnyRole || !$roles){
        //     return $next($request);
        // }
        if (Auth::user()->security_level =='admin'){
            return $next($request);
        }else{
            return redirect('/')->with('error','Insuficient permission');
        }
    }
}
