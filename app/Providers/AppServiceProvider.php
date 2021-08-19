<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      // System
      require_once app_path() . '/Helpers/System/Default.php';
      require_once app_path() . '/Helpers/System/Dummy.php';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);
      config(['app.locale' => 'en']);
      Carbon::setLocale('en');
      date_default_timezone_set('Asia/Jakarta');
    }
}
