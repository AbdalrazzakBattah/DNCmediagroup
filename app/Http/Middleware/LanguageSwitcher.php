<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Session;

class LanguageSwitcher
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
        if($request->route('locale')) {
            app()->setLocale($request->route('locale'));
            Carbon::setLocale($request->route('locale'));
            Session::put('locale',$request->route('locale'));
            return $next($request);
        }
        else {
          if(Session::has('locale')){
            app()->setLocale(Session::get('locale'));
            Carbon::setLocale(Session::get('locale'));
            Session::put('locale',Session::get('locale'));
          }
          else{
            app()->setLocale(Config::get('app.locale'));
            Carbon::setLocale(Config::get('app.locale'));
            Session::put('locale',Config::get('app.locale'));
          }
          return $next($request);
        }
    }
}
