<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\SecurityAdvisoriesHealthCheck\SecurityAdvisoriesCheck;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Health::checks([
            EnvironmentCheck::new(),
            DatabaseCheck::new(),
            OptimizedAppCheck::new(),
            CacheCheck::new(),
            SecurityAdvisoriesCheck::new(),
            DebugModeCheck::new(),
        ]);
    }
}
