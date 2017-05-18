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
        // Services Biodata 
        $this->app->when('App\Http\Controllers\BiodataController')
            ->needs('App\Domain\Contracts\BiodataInterface')
            ->give('App\Domain\Repositories\BiodataRepository');
        // Services Siswa 
        $this->app->when('App\Http\Controllers\SiswaController')
            ->needs('App\Domain\Contracts\SiswaInterface')
            ->give('App\Domain\Repositories\SiswaRepository');
    }
}
