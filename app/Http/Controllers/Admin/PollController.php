<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function  detail($id){
        $poll = Poll::where('id',$id)->firstOrFail();

//        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        $questions =  json_decode($poll->content);



try{
    $poll_details = PollDetail::where('poll_id', $id)->get();
    $result=[];

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
} catch (Throwable $e) {
    report($e);

//    return false;
    return view('admin.polls.detail', ['poll'=>$poll, 'result'=>$result, 'questions'=>$questions]);

}

        return view('admin.polls.detail', ['poll'=>$poll, 'result'=>$result, 'questions'=>$questions]);
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
            'state'=>1
//            Đang diễn ra
        ];
        $this->createPollRecord($data_array);

        return redirect()->back()->with('alert', 'Updated!');

    }
//    function list()
//    {
//        $data = Poll::paginate(10);
//        return view('admin.polls.list', compact('data'));
//    }

    function list($par=null)
    {
//        return $par;
        switch ($par){
            case 'completed':
                $data = Poll::where('state',0)->paginate(10);
                return view('admin.polls.list', compact('data'));
                break;
            case 'processing':
                $data = Poll::where('state',1)->paginate(10);
                return view('admin.polls.list', compact('data'));
                break;
        }
        $data = Poll::paginate(10);
        return view('admin.polls.list', compact('data'));

    }

//    Get ballots of poll with id
    public function  ballots($id){
        $poll = Poll::where('id',$id)->firstOrFail();
        $data = PollDetail::where('poll_id', $id)->paginate(10);
        return view('admin.polls.ballots',['poll'=>$poll], compact('data'));
    }

    function editView($poll_id){
        $poll = Poll::where('id',$poll_id)->firstOrFail();
        return view('admin.polls.edit',['poll'=>$poll]);
    }

    function editRequest(Request $request){

    }



}
