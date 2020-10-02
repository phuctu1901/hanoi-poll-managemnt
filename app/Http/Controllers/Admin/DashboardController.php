<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public  function  index(){
            $open_polls=Poll::where('state', 1)->where('organization_id', Auth::user()->org->id)->limit(10)->get();
//        $count_tour = Tour::where('isActive',1)->count();
//        $count_car = Car::where('isActive',1)->count();
//        $count_service = Service::where('isActive',1)->count();
//        $count_post = Post::where('isActive',1)->count();
//        $tours= Tour::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $services= Service::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $cars= Car::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $posts= Post::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
            return view('organization.dashboard.index',['open_polls'=>$open_polls] );
        }
//        $count_tour = Tour::where('isActive',1)->count();
//        $count_car = Car::where('isActive',1)->count();
//        $count_service = Service::where('isActive',1)->count();
//        $count_post = Post::where('isActive',1)->count();
//        $tours= Tour::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $services= Service::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $cars= Car::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        $posts= Post::where('isActive',1)->orderBy('view_counter', 'DESC')->limit(10)->get();
//        return view('admin.dashboard.index',['tour'=>$count_tour,'car'=>$count_car,'service'=>$count_service,'post'=>$count_post,'posts'=>$posts, 'services'=>$services, 'cars'=>$cars, 'tours'=>$tours] );
}
