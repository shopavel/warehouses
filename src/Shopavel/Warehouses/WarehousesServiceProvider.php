<?php namespace Shopavel\Warehouses;

use Illuminate\Support\ServiceProvider;

/**
 * Warehouses service provider.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class WarehousesServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shopavel/warehouses');

        $this->app['warehouse'] = $this->app->share(function($app)
        {
            return new Warehouse;
        });

        $this->app['warehouse.container'] = $this->app->share(function($app)
        {
            return new Container;
        });

        $this->app['warehouse.stock'] = $this->app->share(function($app)
        {
            return new Transactions\StockTransactions();
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('warehouse', 'warehouse.container', 'warehouse.stock');
    }

}