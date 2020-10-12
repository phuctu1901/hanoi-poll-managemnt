<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('admin.categories.index', ['categories'=>$categories]);
    }

    public function addView(){
        return view('admin.categories.add');
    }

    public  function addRequest(Request $request){
        $data_array=[
            "name"=>$request->category_name,
            "desc"=>$request->category_des,
        ];
        $this->createCategory($data_array);

        return redirect()->back()->with('alert', 'Updated!');
    }

    protected function createCategory(array $data)
    {
//         return $data;
        return Category::create($data);
    }
}
