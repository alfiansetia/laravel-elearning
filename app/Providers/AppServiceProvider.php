<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        view()->composer(
            'components.navbar',
            function ($view) {
                $view->with('categories', Category::withCount('products')->get());
                $view->with('users', User::all());
            }
        );

        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->isadmin == true; //1
        });

        Gate::define('user', function (User $user) {
            return $user->isadmin != true; //0
        });
    }
}
