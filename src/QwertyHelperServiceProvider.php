<?php

namespace slvler\helpmate;

use Illuminate\Support\ServiceProvider;
use slvler\helpmate\Commands\HelperCommand;

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
