<?php

namespace App\Http\Controllers;
use App\Models\BlogCategory;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use  Image;
use Auth;

class CategoryControllerbloge extends Controller
{
    public function index_category()
    {
        $categories=BlogCategory::with('blogs')->get();
        return view('dashboard.admin.blog_category',compact('categories'));
    }


    public function create()
    {
        return view('dashboard.admin.create_blog_category');
    }


    public function store_category(Request $request)
    {


        $category = new BlogCategory();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->save();


        return redirect()->route('admin.index_category');
    }

    public function edit_category($id){

        $categores =BlogCategory::find($id);
        return view('dashboard.admin.edit_blog_category',compact('categores'));

    }

    public function update_category(request $request ,$id){

        $category=BlogCategory::find($id);

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('admin.index_category');

        }

    public function delete_category($id){
        $category= BlogCategory::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
    

    ////bloge//


    public function blog_index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('dashboard.admin.blog',compact('blogs'));
    }



    public function blog_create()
    {
        $categories = BlogCategory::where('status',1)->get();
        return view('dashboard.admin.create_blog',compact('categories'));
    }
    public function blog_store(Request $request)
    {

        $admin = Auth::guard('admin')->user();
        $blog = new Blog();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $blog->image = '/uploaded/image/' . $imageName;

        }

        $blog->admin_id = $admin->id;
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->blog_category_id = $request->category;
        $blog->status = $request->status;
        $blog->show_homepage = $request->show_homepage;
        $blog->seo_title = $request->seo_title ? $request->seo_title : $request->title;
        $blog->seo_description = $request->seo_description ? $request->seo_description : $request->title;
         $blog->save();


        return redirect()->route('admin.blog_index');
    }

    public function edit_blog($id)
    {
        $categories = BlogCategory::where('status',1)->get();
        $blog = Blog::find($id);
        return view('dashboard.admin.edit_blog',compact('categories','blog'));
    }


    public function update_blog(Request $request,$id)
    {
        $blog = Blog::find($id);



        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($blog->image) {
                Storage::delete($blog->image);
            }

            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $blog->image = '/uploaded/image/' . $imageName;
            $blog->save();
        }

        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->blog_category_id = $request->category;
        $blog->status = $request->status;
        $blog->show_homepage = $request->show_homepage;
        $blog->seo_title = $request->seo_title ? $request->seo_title : $request->title;
        $blog->seo_description = $request->seo_description ? $request->seo_description : $request->title;
        $blog->save();


        return redirect()->route('admin.blog_index');
    }


    public function delete_blog($id){
        $category= blog::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
