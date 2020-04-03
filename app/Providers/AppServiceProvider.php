<?php

namespace App\Providers;

use App\Poll;
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
        $top_polls = Poll::where('state',1)->orderBy('updated_at','DESC')->limit(5)->get();
        view()->share(['top_polls'=>$top_polls]);

    }
}
