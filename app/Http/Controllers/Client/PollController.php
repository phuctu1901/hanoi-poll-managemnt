<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function detail($poll_slug)
    {
        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        return view('client.polls.detail',['poll'=>$poll_detail]);
    }
}
