<?php

namespace App\Http\Controllers\Admin;
use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq_index(){
        $faq=Faq::all();

        return view('dashboard.admin.faq',compact('faq'));
    }

    public function faq_add(){
        return view('dashboard.admin.faq_add');
    }

    public function faq_store(request $request){

        $validator =validator::make($request->all(),[
            'question'=>['required',],
             'ans'=>['required'],

        ]);

         if($validator->fails()){
            return  redirect()->back()->withErrors($validator)->withInput();
        }

         $faq_store = new Faq();

         $faq_store->question = $request->question;
         $faq_store->ans =$request->ans;
         $faq_store->save();

         return redirect()->route('admin.faq_index')->with('success','Data Insert Successfully.');

     }

     public function faq_edit($id){

        $faq =Faq::findOrFail($id);
        return view('dashboard.admin.faq_edit',compact('faq'));

    }


    public function faq_update(request $request ,$id){

        $faq=Faq::findOrFail($id);

        $faq->question= $request->question;
        $faq->ans = $request->ans;

        $faq->update();

        return redirect()->route('admin.faq_index')->with('success','Data Insert Successfully.');

        }

    public function faq_status(faq $faq)
       {

    if($faq->status==1){
        $faq->update(['status'=>0]);
    }else{
        $faq->update(['status'=>1]);
    }
     return redirect()->back();

    }

     public function faq_delete($id){
        $categore= Faq::findOrFail($id);
        $categore->delete();
        return redirect()->back();
    }

}
