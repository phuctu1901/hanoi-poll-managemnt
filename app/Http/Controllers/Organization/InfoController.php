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
        $id = $request->id;
        $org = Organization::find($id);

        $org->code = $request->code;
        $org->name = $request->name;
        $org->desc = $request->desc;
        $org->phone = $request->phone;
        $org->email= $request->email;
        $org->website= $request->website;
        $org->thumb= $request->org_thumb_data;
        $org->logo= $request->org_logo_data;
        $org->slug= $request->slug;
        $org->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
