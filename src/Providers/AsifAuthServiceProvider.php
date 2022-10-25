<?php

namespace Sakib\AsifAuth\Providers;

use Illuminate\Support\ServiceProvider;

class AsifAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/asif-auth.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'asif-auth');
    }
}
