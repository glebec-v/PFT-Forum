<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View()->composer('partials.navmenu', function($view){
            $view->with('categories', \App\Models\Category::all());
        });

        View()->composer('partials.latest_posts', function($view){
            $view->with('posts', Post::lastPosts(4));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
