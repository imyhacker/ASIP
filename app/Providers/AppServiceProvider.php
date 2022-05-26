<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
         });
    
         Gate::define('isGuru', function($user) {
             return $user->role == 'guru';
         });
    
         Gate::define('isSiswa', function($user) {
             return $user->role == 'siswa';
         });
    }
}
