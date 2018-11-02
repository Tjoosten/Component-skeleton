<?php 

namespace B61\Skeleton;

use Illuminate\Support\ServiceProvider;

/**
 * Class SkeletonServiceProvider 
 * 
 * @package B61\Skeleton
 */
class SkeletonServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap the application services. 
     * 
     * @return void
     */
    public function boot(): void 
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/skeleton.php' => config_path('skeleton.php')], 'config');
        }
    }

    /**
     * Register the application services. 
     * 
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'skeleton');
    }
}