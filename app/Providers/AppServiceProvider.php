<?php

namespace App\Providers;

use App\Repositories\StatesRepository;
use App\Repositories\StatesRepositoryImpl;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryImpl;
use Illuminate\Support\ServiceProvider;
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
        $this->app->singleton(UserRepository::class, UserRepositoryImpl::class);
        $this->app->singleton(StatesRepository::class, StatesRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        schema::defaultStringLength(191);
    }
}
