<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShareMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->segment(1) == 'admin') {
            $menus = \App\Models\Menu::where('module','back')->get();
        }else{
            $menus = \App\Models\Menu::where('module','front')->get();
        }
        // $shareMenu = MakeMenu::make_tree_array($menus->toArray());
        view()->share('menus', $menus->toArray());
        return $next($request);
    }
}
