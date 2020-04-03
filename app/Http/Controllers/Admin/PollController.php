<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function  all(){

    }

    public  function  addView(){
        return view('admin.polls.add');
    }
}
