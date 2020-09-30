<?php

namespace App\Http\Controllers\Organization;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    function add(){
        return view('organization.permission.add' );
    }

    function  addRequest(Request $request){
        $permission = Permission::create(['name' => $request->name]);
        Session::flash('success', 'Thêm quyền thành công!');
        return redirect('/organization/role');
    }
}
