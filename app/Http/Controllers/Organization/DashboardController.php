<?php

namespace App\Http\Controllers\Organization;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public  function  index(){
//        $count_tour = Tour::where('isActive',1)->count();
//        $count_car = Car::where('isActive',1)->count();
//        $count_service = Service::where('isActive',1)->count();
//        $count_post = Post::where('isActive',1)->count();
//        $tours= Tour::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $services= Service::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $cars= Car::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $posts= Post::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
        return view('organization.dashboard.index',[] );
    }
}
