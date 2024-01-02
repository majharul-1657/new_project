<?php
namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerbloge extends Controller
{
    public function index()
    {
        return view('dashboard.admin.blog_category');
    }
}
