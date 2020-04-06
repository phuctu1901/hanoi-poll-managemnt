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

        for($i = 0; $i<$question_number; $i++) {
            if ($i > 0) {
                $questions = $questions . ',';
            }

            $questions = $questions . '{"content":' . json_encode($question_content[$i]) . '}';

        }
        $questions = $questions . ']';


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
