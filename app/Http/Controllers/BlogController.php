<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){

        return view('admin.blog.add-blog');
    }
    public function saveBlog(Request $request){
        $this->validate($request,[
            'blog_name'=>'required',
            'blog_description'=>'required',
            'publication_status'=>'required'
        ]);
        $blog =new Blog();
        $blog->blog_name=$request->blog_name;
        $blog->blog_description=$request->blog_description;
        $blog->publication_status=$request->publication_status;
        $blog->save();
        return redirect('/add/blog')->with('message','Blog info save Successfully');
    }

    public function manageBlog(){
        $blogs= Blog::all();
        return view('admin.blog.manage-blog',
            ['blogs'=>$blogs]);

    }

    public function unpublishedBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=0;
        $blog->save();
        return redirect('/manage/blog');


    }

    public function publishedBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=1;
        $blog->save();
        return redirect('/manage/blog');
    }
    public function editBlog($id){
        $blog=Blog::find($id);
        return view('admin.blog.edit-blog',[
            'blog'=>$blog
        ]);

    }
    public function updateBlog(Request $request){
        $blog=Blog::find($request->id);
        $this->validate($request,[
            'blog_name'=>'required',
            'blog_description'=>'required',
            'publication_status'=>'required'
        ]);
        $blog->blog_name=$request->blog_name;
        $blog->blog_description=$request->blog_description;
        $blog->publication_status=$request->publication_status;
        $blog->save();
        return redirect('/manage/blog')->with('message','Blog updated Successfully');

    }
    public function deleteBlog($id){
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('/manage/blog')->with('message','Blog  Deleted Successfully');
    }
}
