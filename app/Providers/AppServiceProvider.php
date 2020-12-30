<?php

namespace App\Providers;

use App\Models\Blog;
use App\Observers\BlogObserver;
use Illuminate\Pagination\Paginator;
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
        //将分页默认试图画修改Bootstrap
        Paginator::useBootstrap();

        //注意观察者
        Blog::observe(BlogObserver::class);

    }

}
