<?php

namespace Smartcloud\AccountingRules;

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
        $this->app->make('Smartcloud\AccountingRules\AccountingRulesController');
    }
}
