<?php
namespace MusheAbdulHakim\CoinGecko\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use MusheAbdulHakim\CoinGecko\CoinGecko;
use MusheAbdulHakim\CoinGecko\Contracts\CoinGeckoInterface;
use MusheAbdulHakim\CoinGecko\Facades\CoinGecko as CoinGeckoFacade;

/**
 * Class NextpackServiceProvider
 *
 * @author  Mushe Abdul-Hakim  <musheabdulhakim99@gmail.com>
 */
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
    public function boot()
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
     *
     * @return void
     */
    public function register()
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
    private function implementationBindings()
    {
        $this->app->bind(CoinGecko::class, function ($app) {
            return new CoinGecko($app);
        });
    }

    /**
     * Merge Config published config with package config
     *
     * @return void
     */
    public function mergeConfig(){
        $config = __DIR__ . '/Config/coingecko.php';
        $this->mergeConfigFrom($config,'coingecko');
    }

    /**
     * Publish the Config file from the Package to the App directory
     */
    private function configPublisher()
    {
        // When users execute Laravel's vendor:publish command, the config file will be copied to the specified location
        $this->publishes([
            __DIR__ . '/Config/coingecko.php' => config_path('coingecko.php'),
        ]);
    }

    /**
     * Facades Binding
     */
    private function facadeBindings()
    {
        // Register 'coingecko.coingecko' instance container
        $this->app['coingecko'] = $this->app->share(function ($app) {
            return $app->make(CoinGecko::class);
        });

        // Register 'CoinGecko' Alias, So users don't have to add the Alias to the 'app/config/app.php'
        $this->app->booting(function () {
            $this->app->alias(CoinGeckoFacade::class,'CoinGecko');
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
