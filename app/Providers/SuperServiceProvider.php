<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Components\SuperComponent;
class SuperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(SuperComponent::class,function(){
            return new SuperComponent('intelligence');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function registre()
    {
        //
    }
}
