<?php

namespace Saci\AccountingRules;

use Illuminate\Support\ServiceProvider;

class AccountingRulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Saci\AccountingRules\AccountingRulesController');
    }
}
