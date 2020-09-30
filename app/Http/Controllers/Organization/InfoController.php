<?php

namespace App\Http\Controllers\Organization;

use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    //
    public  function get(){
        $org = Organization::Where('id',Auth::user()->org->id)->firstOrFail();
//        return $org;
        return view('organization.info.index', ['info' => $org]);
    }

    public  function  update(Request $request)
    {
//        $id = $request->id;
//        $info = Info::find($id);
//        $info->address = $request->address;
//        $info->title = $request->title;
//        $info->tel = $request->tel;
//        $info->email = $request->email;
//        $info->facebook = $request->facebook;
//        $info->save();
//        return redirect()->back()->with('alert', 'Updated!');
    }

}
