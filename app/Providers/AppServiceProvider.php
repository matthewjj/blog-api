<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces;
use App\Services;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            Interfaces\PostStoreInterface::class,
            Services\PostStore::class,
        );

        $this->app->bind(
            Interfaces\PostResponseInterface::class,
            Services\PostResponse::class,
        );

        $this->app->bind(
            Interfaces\UserStoreInterface::class,
            Services\UserStore::class,
        );

        $this->app->bind(
            Interfaces\UserResponseInterface::class,
            Services\UserResponse::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
