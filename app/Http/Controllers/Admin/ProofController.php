<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Proof;
use Illuminate\Http\Request;

class ProofController extends Controller
{
    public function  detail($id){
        $proof = Proof::where('id',$id)->firstOrFail();

        return view('admin.proofs.detail',['rawdata'=>$proof->rawdata, 'response'=>$proof->response, 'id'=>$proof->pre_ex_id]);

//        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        $questions =  json_decode($poll->content);




        $poll_details = PollDetail::where('poll_id', $id)->get();

        $result=[];

        $first_detail = $poll_details[0];
//        return $first_detail;
        $answer = [];
        foreach ($poll_details as $poll_detail){
            array_push($answer,json_decode($poll_detail->content));
        }
        $collect_of_answer = collect($answer);

        $question_index = 1;
        foreach($questions as $question){
            $option_index=1;
            $tmp = [];
            foreach($question->options as $option){
                $count_value = $collect_of_answer->where($question_index,$option_index) ->count();
                $option_index++;
                array_push($tmp, $count_value);
            }
            array_push($result, $tmp);
            $question_index++;
        }
        return view('admin.polls.detail', ['poll'=>$poll, 'result'=>$result, 'questions'=>$questions]);
    }

}
