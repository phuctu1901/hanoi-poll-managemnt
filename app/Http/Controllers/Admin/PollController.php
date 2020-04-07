<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function  all(){

    }

    public  function  addView(){
        return view('admin.polls.add');
    }

    # Create did to database
    protected function createPollRecord(array $data)
    {
        return Poll::create($data);
    }


    public function addRequest(Request $request)
    {


//        return $request;
        $title = $request->poll_name;
        $category_id = $request->category_id;
        $start_time = $request->start_time;
        $start_at = $request->start_at;
        $end_at = $request->end_at;
        $end_time = $request->end_time;
        $question_content = $request->question_content;

        $thumb = $request->thumb;
        $overview = $request->overview;

        $questions = '[';
        $question_number = (int) $request->question_number;

        $options = $request->option;
        $option_len  = $request->option_len;

        $start_j = 0;
        $j=0;
        for($i = 0; $i<$question_number; $i++) {
            if ($i > 0) {
                $questions = $questions . ',';
            }

            $questions = $questions . '{"question":' . json_encode($question_content[$i]) . ', "options":[';

            for($j = $start_j; $j<$start_j+$option_len[$i]; $j++){
                if ($j > $start_j) {
                    $questions = $questions.',';
                }
                    $questions = $questions.'"';
                    $questions = $questions.$options[$j] .'"';
            }
            $questions = $questions.']}';
            $start_j=$j;
        }
        $questions = $questions . ']';

//        $obj = json_encode()
//        return ($questions);


        $data_array=[
            "title"=>$title,
            "thumb"=>$thumb,
            'category_id'=>$category_id,
            'overview'=>$overview,
            'content'=>$questions,
            'notes'=>"",
            'faqs'=>"",
            'start_at'=>$start_at.':'.$start_time,
            'end_at'=>$end_at.':'.$end_time,
            'state'=>0
//            Đang chờ
        ];
        $this->createPollRecord($data_array);

        return redirect()->back()->with('alert', 'Updated!');

    }
    function list()
    {
        $data = Poll::paginate(10);
        return view('admin.polls.list', compact('data'));
    }

}
