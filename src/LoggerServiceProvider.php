<?php
/**
 * Created by PhpStorm.
 * User: Adnan
 * Date: 14/09/2019
 * Time: 06:22 PM
 */
namespace  Adnanmukhtar\Logger;
use Illuminate\Support\ServiceProvider;

class  LoggerServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','logger');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'\config\logger.php',
            'logger');
       $this->publishes([__DIR__.'/config/logger.php'=>config_path('logger.php')]);
    }
    public function register(){

    }
}