<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    public function testimonial(){
        $testimonial=Testimonial::all();

        return view('dashboard.admin.testimonial',compact('testimonial'));
    }

    public function testimonial_create(){
        return view('dashboard.admin.testimonial_create');
    }


    public function testimonial_store(request $request){

         $testimonial = new Testimonial();

         if($request->hasFile('image')){
             $image=$request->file('image');
             $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
             $image->move(public_path('uploaded/image'), $imageName);
             $testimonial->image = '/uploaded/image/' . $imageName;

         }

         $testimonial->name = $request->name;
         $testimonial->designation =$request->designation;
         $testimonial->comment =$request->comment;
         $testimonial->save();

         return redirect()->route('admin.testimonial')->with('success','Data Insert Successfully.');

     }


     public function testimonial_edit($id){

        $testimonial =Testimonial::findOrFail($id);
        return view('dashboard.admin.Testimonial_edit',compact('testimonial'));

    }





    public function testimonial_update(request $request ,$id){

        $testimonial=Testimonial::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($testimonial->image) {
                Storage::delete($testimonial->image);
            }

            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $testimonial->image = '/uploaded/image/' . $imageName;
            $testimonial->save();
        }



        $testimonial->name= $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->designation = $request->comment;

        $testimonial->update();

        return redirect()->route('admin.testimonial')->with('success','Data Insert Successfully.');

        }

        public function testimonial_status(testimonial $testimonial)
        {

            if($testimonial->status==1){
                $testimonial->update(['status'=>0]);
            }else{
                $testimonial->update(['status'=>1]);
            }
             return redirect()->back();
        }

        public function testimonial_delete($id){
            $testimonial= Testimonial::findOrFail($id);
            $testimonial->delete();
            return redirect()->back();
        }
}
