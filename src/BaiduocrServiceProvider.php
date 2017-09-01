<?php
namespace Keshunchen\Baiduocr;

use Illuminate\Support\ServiceProvider;

class BaiduocrServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    public function boot()
    {
        $this->registerConfig();
    }

    public function register()
    {
        $this->app->bind('baiduocr', function() {
            return new Baiduocr();
        });
    }

    public function provides()
    {
        return ['baiduocr'];
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('baiduocr.php')
        ]);
    }

}