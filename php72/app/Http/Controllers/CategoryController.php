<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function index(){
        return view('admin.categorys.add-category');
    }

    public function saveCategory(Request $request){
//        $category = new Category();
//        $category->category_name = $request->category_name;
//        $category->category_description = $request->category_description;
//        $category->publicaion_status = $request->publicaion_status;
//        $category->save();
//        Category::create($request->all());
        DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'publicaion_status' => $request->publicaion_status
        ]);
        return 'success';
    }

    public function manageCategory(){
      return view('admin.categorys.manage-category');
    }

}
