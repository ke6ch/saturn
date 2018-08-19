<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Scout\EngineManager;
use App\ScoutEngines\Elasticsearch\ElasticsearchEngine;
use Elasticsearch\ClientBuilder as ElasticBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        resolve(EngineManager::class)->extend('elasticsearch', function () {
            return new ElasticsearchEngine(ElasticBuilder::create()
                ->build(),
                config('scout.elasticsearch.index')
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
