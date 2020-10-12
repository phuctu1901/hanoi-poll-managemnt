<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function index(){
            $orgs = Organization::paginate(20);
            return view('admin.organizations.index', ['orgs' => $orgs]);
    }



    public function  addView(){
        return view('admin.organizations.add');
    }

    public function  editView($org_id){
        $org = Organization::find($org_id);

        return view('admin.organizations.edit', ['org'=>$org]);
    }



    protected function createOrganization(array $data)
     {
//         return $data;
         return Organization::create($data);
     }

    public function addRequest(Request $request){

//        org_name	"12"
//org_code	"12"
//org_des	"12"
//org_thumb_data	"12"
//category_thumb_data	"12"
//org_state	"1"
//org_phone	"12"
//org_mail	"12"
//org_website	"12"
//
//                return $request;

        $data_array=[
            "name"=>$request->org_name,
            "code"=>$request->org_code,
            "desc"=>$request->org_des,
            "created_user"=>Auth::user()->id,
            "thumb"=>$request->org_thumb_data,
            "logo"=>$request->org_logo_data,
            "phone"=>$request->org_phone,
            "website"=>$request->org_website,
            "email"=>$request->org_mail,
            'state'=>(int) $request->org_state
        ];
        return $this->createOrganization($data_array);

        return redirect()->back()->with('alert', 'Updated!');
//        return $request;
    }

    public function editRequest(Request $request){

    }


}
