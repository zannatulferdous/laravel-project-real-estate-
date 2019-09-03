<?php

namespace App\Providers;

use App\Category;
use View;
Use Illuminate\support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength('191');
        view::composer('front-end.includes.header',function ($view){
            $view->with('categories',Category::where('publication_status',1)->get());
        });
    }
}
