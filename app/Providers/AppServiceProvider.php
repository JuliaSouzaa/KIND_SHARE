<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Define o idioma da aplicação para pt_BR
        App::setLocale('pt_BR');
    }

    public function register()
    {
        //
    }
}
