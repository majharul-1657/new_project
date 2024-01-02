<?php

namespace App\Http\Controllers\Admin;
use App\Models\PrivacyPolicy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index_Privacy_Policy(){
     $PrivacyPolicy = PrivacyPolicy::first();

        return view('dashboard.admin.privacy_policy',compact('PrivacyPolicy'));
    }

    public function update_Privacy_Policy(Request $request, $id){

        $PrivacyPolicy = PrivacyPolicy::first();
        $PrivacyPolicy->Privacy_Policy = $request->Privacy_Policy;
        $PrivacyPolicy->save();
        return redirect()->route('admin.Privacy_Policy');
    }
}
