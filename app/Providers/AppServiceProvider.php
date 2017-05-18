<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    public function register()
    {
        // Services Siswa 
        $this->app->when('App\Http\Controllers\SiswaController')
            ->needs('App\Domain\Contracts\SiswaInterface')
            ->give('App\Domain\Repositories\SiswaRepository');
    }
}
