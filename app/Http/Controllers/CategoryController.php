<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function saveCategory(Request $request){
        $this->validate($request,[
            'Category_name'=>'required',
            'category_description' =>'required',
            'publication_status'=>'required'
        ]);
        $category =new Category();
        $category->Category_name=$request->Category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return redirect('/add/category')->with('message','Category info save Successfully');
    }

    public function manageCategory(){
        $categories=Category::all();
        return view('admin.category.manage-category',
            ['categories'=>$categories]);

    }

    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status=0;
        $category->save();
        return redirect('/manage/category');


    }

    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status=1;
        $category->save();
        return redirect('/manage/category');


    }
    public function editCategory($id){
          $category=Category::find($id);
         return view('admin.category.edit-category',[
             'category'=>$category
         ]);

    }
    public function updateCategory(Request $request){
        $this->validate($request,[
            'Category_name'=>'required',
            'category_description' =>'required',
            'publication_status'=>'required'
        ]);
        $category=Category::find($request->id);
        $category->Category_name=$request->Category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();
        return redirect('/manage/category')->with('message','Category  updated Successfully');


    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/manage/category')->with('message','Category  Deleted Successfully');


    }
}
