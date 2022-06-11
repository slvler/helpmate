<?php


namespace Qwerty\HelperService\Providers;

use Illuminate\Support\ServiceProvider;
use Qwerty\HelperService\Commands\HelperCommand;


class QwertyHelperServiceProvider extends ServiceProvider{

    public function boot(){
        $this->resolveCommands();
    }


    public function register(){

    }

    private function resolveCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                HelperCommand::class,
            ]);
        }
    }


}
