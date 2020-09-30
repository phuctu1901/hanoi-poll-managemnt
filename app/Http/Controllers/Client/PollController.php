<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Poll;
use App\Models\PollDetail;
use App\Models\Proof;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function detail($poll_slug)
    {
        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        $questions =  json_decode($poll_detail->content);

//        return $questions;
//        return $questions;

//        return view('client.polls.detail',['poll'=>$poll_detail,'questions'=>$questions]);
        return view('client.poll_detail',['poll'=>$poll_detail,'questions'=>$questions]);
    }



    public function submit(Request $request)
    {

//        return $request;

        $answer = $request->answer;
//        return \GuzzleHttp\json_decode($answer);

        $proof_id = Proof::where('pre_ex_id',$request->pre_ex_id)->firstOrFail()->id;
        $poll_id = $request->poll_id;
        $content =$request->answer_content;

        $data =[
            'poll_id'=>$poll_id,
            'proof_id'=>$proof_id,
            'content'=>\GuzzleHttp\json_encode($answer)
        ];

        $this->createPollDetailRecord($data);

        return redirect()->back()->with('alert', 'Added!');
    }

    protected function createPollDetailRecord(array $data)
    {
        return PollDetail::create($data);
    }
}
