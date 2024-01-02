<?php

 namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermsAndConditionController extends Controller
{
    public function index_terms_condition(){
        $termsAndCondition = TermsCondition::first();

        return view('dashboard.admin.terms_and_condition',compact('termsAndCondition'));
    }

    public function update_terms_condition(Request $request, $id){

        $TermsAndCondition = TermsCondition::first();
        $TermsAndCondition->terms_condition = $request->terms_condition;
        $TermsAndCondition->save();
        return redirect()->route('admin.terms_condition');
    }
}
