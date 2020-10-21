<?php

namespace App\Http\Controllers\Organization;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function index(){
        $roles = Role::Where('isAdmin','0')->where('organization_id', Auth::user()->org->id)->get();
        $permissions = Permission::Where('isAdmin','0')->get();
        return view('organization.role.index',['roles'=>$roles, 'permissions'=>$permissions]);
    }

    function add(){
//        $roles = Role::Where('isAdmin','0')->where('organization_id', Auth::user()->org->id)->get();
        $permissions = Permission::Where('isAdmin','0')->get();
        return view('organization.role.add', ['permissions'=>$permissions]);
    }

    function edit($id){
    $role = Role::findById($id);
        $permissions = Permission::Where('isAdmin','0')->get();

        return view('organization.role.edit', ['role'=>$role, 'permissions'=>$permissions]);
}

    function delete(Request $request)
    {
        $id = $request->id;
//        User::find($request->id)->delete();
        $role = Role::findById($id);
        $role->delete();
        return redirect()->back()->with('success','User deleted successfully');
    }

    function editRequest(Request $request){
        $role = Role::findById($request->id);
        $permissions = collect([]);
        foreach($request->permissions as $permission_id){

            $permission = Permission::findById((int)($permission_id));
            $permissions->push($permission);
        }
        $role->syncPermissions($permissions);
        Session::flash('success', 'Sủa loại tài khoản thành công!');
        return redirect('/organization/role');
    }

    function addRequest(Request $request){
//        return $request;
        $role = Role::create(['name' => $request->name]);

        foreach($request->permissions as $permission_id){
            $permission = Permission::findById((int)($permission_id));
            $permission->assignRole($role);
        }
        $role->organization_id = Auth::user()->org->id;
        $role->isAdmin = 0;
        $role->displayname = $request->displayname;
        $role->save();
        Session::flash('success', 'Thêm loại tài khoản thành công!');
        return redirect('/organization/role');
    }
}
