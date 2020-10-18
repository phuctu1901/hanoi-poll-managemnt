<?php

namespace App\Http\Controllers\Organization;
use App\Http\Controllers\Controller;

use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public  function  index(){
        $open_polls=Poll::where('state', 1)->where('organization_id', Auth::user()->org->id)->limit(10)->get();
        $count_open = Poll::where('state',1)->count();
        $count_closed = Poll::where('state',3)->count();
        $count_completed = Poll::where('state',2)->count();
        $count_early = Poll::where('state',0)->count();
//
//        Các trạng thái của cuộc khảo sát
//        - Chưa bắt đầu (Trạng thái mặc định) - 0
//        - Đang diễn ra (Đang cho phép diễn ra) - 1
//        - Đã kết thúc (Đã hoàn thành) - 2
//        - Đã đóng (Chưa kết thúc nhưng dừng lại) - 3
        return view('organization.dashboard.index',['open_polls'=>$open_polls,'opened'=>$count_open,'closed'=>$count_closed,'completed'=>$count_completed,'early'=>$count_early] );
    }
}
