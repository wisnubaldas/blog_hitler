<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Artikel;
use HtmlClass;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	Schema::defaultStringLength(191);
        View::share('html_class',new HtmlClass);
        View::share('content','default');
        // View::share('artikel',Artikel::limit(5)->get());


    }
}
