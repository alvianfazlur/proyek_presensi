<?php
namespace App\Http\Middleware;
use Closure;

class akun
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
        if(auth()->user()->akun == 1){
            return $next($request);
        } else  if(auth()->user()->akun == 2){
            return $next($request);
        }

        return redirect('home')->with('error',"Only admin can access!");
    }
}

?>