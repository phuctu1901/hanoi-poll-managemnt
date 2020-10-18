<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Poll;
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
        $categories = Category::all();

        view()->share(['top_polls'=>$top_polls, 'categories'=>$categories]);

    }
}
