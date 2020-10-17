<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(){
        $data = Organization::paginate(3);
        return view('client.organization.index',  compact('data'));
    }

    public function detail($slug){
        return view('client.organization.index', []);
    }

    public function search(Request $request){

        $keyword = $request->keyword;
        $data= Organization::where('name',  'LIKE', "%{$keyword}%")
            ->orWhere('code', 'LIKE', "%{$keyword}%")->paginate(3);
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
        return view('client.organization.search_result', compact('data'))->render();
    }
    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = Organization::paginate(3);

            return view('client.organization.table_list', compact('data'))->render();
        }
    }
}
