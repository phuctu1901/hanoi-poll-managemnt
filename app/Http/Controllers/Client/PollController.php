<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Organization;
use App\Models\Poll;
use App\Models\PollDetail;
use App\Models\Proof;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index(){
        try{
            $polls = Poll::paginate(9);
            return view('client.poll.index', ['polls'=>$polls,'org'=>null]);
        } catch (ModelNotFoundException $exception){
            return view('client.poll.index', ['polls'=>null,'org'=>null]);

        }
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
//        return $category;
        try{
            $polls = Poll::where('category_id', $category->id)->paginate(9);
            return view('client.poll.polls_by_category', ['polls'=>$polls,'category'=>$category]);
        } catch (ModelNotFoundException $exception){
            return view('client.poll.polls_by_category', ['polls'=>null,'category'=>$category]);

        }
    }


    public function detail($poll_slug)
    {
        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        $questions =  json_decode($poll_detail->content);

//        return $questions;
//        return $questions;

//        return view('client.polls.detail',['poll'=>$poll_detail,'questions'=>$questions]);
        return view('client.poll_detail',['poll'=>$poll_detail,'questions'=>$questions]);
    }

    public  function org($org_slug){
        try{
            $org = Organization::where('slug', $org_slug)->firstOrFail();
            $polls = Poll::where('organization_id', $org->id)->paginate(9);
            return view('client.poll.polls_by_org', ['polls'=>$polls, 'org'=>$org]);
        } catch (ModelNotFoundException $exception){
            return view('client.poll.polls_by_org', ['polls'=>null, 'org'=>null]);

        }

    }


    public function overview($poll_slug)
    {
        $poll_detail = Poll::where('slug', $poll_slug)->firstOrFail();
        $questions =  json_decode($poll_detail->content);

//        return $questions;
//        return $questions;

//        return view('client.polls.detail',['poll'=>$poll_detail,'questions'=>$questions]);
        return view('client.poll_overview',['poll'=>$poll_detail,'questions'=>$questions]);
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

    public function search(Request $request){

        $keyword = $request->keyword;
        $polls= Poll::where('title',  'LIKE', "%{$keyword}%")
            ->orWhere('overview', 'LIKE', "%{$keyword}%")->paginate(3);
//        return  $data;
//        $keyword = $request->keyword;
//        $count = strlen($keyword); // 6
//        return [];

//
//        if ($count<15){
//            $data=Transaction::Where('plate_id', $keyword)->paginate(10);;
//        }
//        if ($count==36){
//            $data=Transaction::Where('id', $keyword)->orWhere('bot_station_id', $keyword)->paginate(10);;
//        }
//        if ($count==66){
//            $data=Transaction::Where('txs', $keyword)->paginate(10);;
//        }
        return view('client.poll.search_result', compact('polls'))->render();
    }
}
