<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           $categories = Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();

        view()->composer('*', function ($view) use ($categories)
        {
            $view->with('categories', $categories);
        });
    }
}
