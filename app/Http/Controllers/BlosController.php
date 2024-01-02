<?php

namespace App\Http\Controllers;
use App\models\BlogCategory;
use App\models\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlosController extends Controller
{
    public function blog_index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('dashboard.admin.blog',compact('blogs'));
    }



}
