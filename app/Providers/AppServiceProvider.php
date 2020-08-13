<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Elasticsearch\ClientBuilder as Elasticsearch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
//    public function register()
//    {
//        //
//    }

    public function register()
    {
        $this->app->singleton('es',function()
        {
            $bulider=Elasticsearch::create()->setHosts(config('database.elasticsearch.hosts'));
            if(app()->environment()=='local')
            {
                //配置日志，Elasticsearch 的请求和返回数据将打印到日志文件中，方便我们调试
                $bulider->setLogger(app('log'));
            }
            return $bulider->build();
        });
    }
}
