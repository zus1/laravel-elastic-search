<?php

namespace Zus1\Elasticsearch\Providers;

use Zus1\Elasticsearch\Factory\ClientFactory;
use Elastic\Elasticsearch\Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ElasticSearchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(Client::class, function (Application $app) {
            /** @var ClientFactory $clientFactory */
            $clientFactory = $app->make(ClientFactory::class);

            return $clientFactory->instance();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
