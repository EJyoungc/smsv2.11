<?php

namespace App\Providers;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use App\Helpers\Qs;
use App\Helpers\Mk;
use App\Helpers\Pay;
class AliasServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $loader = AliasLoader::getInstance();

        // Add your aliases
        $loader->alias('Qs',Qs::class);
        $loader->alias('Mk', Mk::class);
        $loader->alias('Pay', Pay::class);
    }
}
