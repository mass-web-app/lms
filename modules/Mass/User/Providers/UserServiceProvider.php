<?php

namespace Mass\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/user_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__.'/../Database/Factories');

    }

    public function boot()
    {

    }

}
