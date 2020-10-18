<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Poll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    function index(){
//
//        return view('client.home.home');
//
//    }

    function index(){
        $categories = Category::all();


        foreach($categories as $category){

            $category->data = Poll::Where('category_id', $category->id)->get();
//
//            $post = Poll::with(['categories' => function($query){
//                $query->latest()->first();
//            }])
//                ->online() //You may have a custom method like this.
//                ->latest()
//                ->whereHas('categories', function($query) use($category) {
//                    $query->whereName($category->name);
//                })->take(1)->first();
//
//            //We take in account the fact that
//            //some posts may belongs to many categories.
//            //Obviously, we don't want to put it twice
//            if(!in_array($post->id, $ids)){
//                $latest_posts_by_category[] = $post;
//                $ids[] = $post->id;
//            }
        }

        return view('client.home', ['categories'=>$categories]);
    }



}
