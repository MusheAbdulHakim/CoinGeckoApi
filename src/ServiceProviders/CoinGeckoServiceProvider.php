<?php

namespace MusheAbdulHakim\CoinGecko\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use MusheAbdulHakim\CoinGecko\CoinGecko;
use MusheAbdulHakim\CoinGecko\Facades\CoinGecko as CoinGeckoFacade;

/**
 * Class NextpackServiceProvider
 *
 * @author  Mushe Abdul-Hakim  <musheabdulhakim99@gmail.com>
 */
// @phpstan-ignore-next-line
class CoinGeckoServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the package.
     */
    public function boot(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Publish the Config file from the Package to the App directory
        |--------------------------------------------------------------------------
        */
        $this->configPublisher();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {

        /*
        |--------------------------------------------------------------------------
        | Implementation Config Merge
        |--------------------------------------------------------------------------
        */
        $this->mergeConfig();

        /*
        |--------------------------------------------------------------------------
        | Implementation Bindings
        |--------------------------------------------------------------------------
        */
        $this->implementationBindings();

        /*
        |--------------------------------------------------------------------------
        | Facade Bindings
        |--------------------------------------------------------------------------
        */
        $this->facadeBindings();

        /*
        |--------------------------------------------------------------------------
        | Registering Service Providers
        |--------------------------------------------------------------------------
        */
        $this->serviceProviders();
    }

    /**
     * Implementation Bindings
     */
    private function implementationBindings(): void
    {
        $this->app->bind(CoinGecko::class, fn($app): \MusheAbdulHakim\CoinGecko\CoinGecko => new CoinGecko($app));
    }

    /**
     * Merge Config published config with package config
     */
    public function mergeConfig(): void
    {
        $config = __DIR__ . '/Config/coingecko.php';
        $this->mergeConfigFrom($config, 'coingecko');
    }

    /**
     * Publish the Config file from the Package to the App directory
     */
    private function configPublisher(): void
    {
        // When users execute Laravel's vendor:publish command, the config file will be copied to the specified location
        $this->publishes([
            __DIR__ . '/Config/coingecko.php' => config_path('coingecko.php'),
        ]);
    }

    /**
     * Facades Binding
     */
    private function facadeBindings(): void
    {
        // Register 'coingecko.coingecko' instance container
        $this->app['coingecko'] = $this->app->share(fn($app) => $app->make(CoinGecko::class));

        // Register 'CoinGecko' Alias, So users don't have to add the Alias to the 'app/config/app.php'
        $this->app->booting(function (): void {
            $this->app->alias(CoinGeckoFacade::class, 'CoinGecko');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            CoinGecko::class
        ];
    }
}
