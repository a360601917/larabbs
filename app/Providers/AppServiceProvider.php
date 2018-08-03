<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider {


  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot() {
    \Carbon\Carbon::setLocale('zh');
    \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
    \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
    
    Schema::defaultStringLength(255);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register() {
    //
  }

}
