<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function add(Request $request){
        Blog::saveblog($request);
        return back();


    }
    public function namageBlog(){
  return view('blog.manage',[
      'blogs'=>Blog::all()
  ]);
    }
    public function edit($blog_id)
    {
        return view('blog.edit',[
            'blog'=>Blog::find($blog_id)
        ]);
    }
    public function updateBlog(Request $request){
        Blog::saveblog($request);
        return redirect('/manage-blog');
    }

     public function deleteBlog(Request $request)
     {
        Blog::deleteblog($request);
         return redirect('/manage-blog');
    }

}
