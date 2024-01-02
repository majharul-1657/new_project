<?php

namespace App\Http\Controllers\Admin;
use App\Models\SelectLocation;
use App\Models\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function location_index(){

        $locations =SelectLocation::all();
       return view('dashboard.admin.select_locations',compact('locations'));

    }


    public function location_create(){

    return view('dashboard.admin.create_locations');

    }


    public function store_location(request $request){

        $locations = new SelectLocation();

        $locations->name = $request->name;
        $locations->save();
        return redirect()->route('admin.location_index');


    }


    public function edit_location($id){

        $locations = SelectLocation::findOrFail($id);
        return view('dashboard.admin.locations_edit',compact('locations'));

    }

    public function update_locations(request $request ,$id){

        $locations=SelectLocation::findOrFail($id);

        $locations->name= $request->name;

        $locations->update();

        return redirect()->route('admin.location_index');

        }


    public function location_delete($id){

        $locations =SelectLocation::findOrFail($id);

         $locations->delete();
        return redirect()->route('admin.location_index');


    }



    ///Property///

    public function Property_index(){
        $Propertys = Property::orderBy('id','desc')->get();

       // $Propertys =property::all();
       return view('dashboard.admin.Property_index',compact('Propertys'));

    }

    public function Property_create(){
        $categories = SelectLocation::get();

         return view('dashboard.admin.Property_create',compact('categories'));

     }


     public function property_store(request $request){

        $property = new Property();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $property->image = '/uploaded/image/' . $imageName;

        }
       // $blog->blog_category_id = $request->category;

        $property->property_name = $request->property_name;
        $property->SelectLocation_category_id = $request->category;
        $property->status = $request->status;

        $property->save();
        return redirect()->route('admin.Property_index');


    }



    public function edit_property($id){
        $categories = SelectLocation::get();
        $property = Property::findOrFail($id);
        return view('dashboard.admin.edit_property',compact('property','categories'));

    }




    public function update_property(request $request ,$id){

        $property=Property::findOrFail($id);



        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($property->image) {
                Storage::delete($property->image);
            }

            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $property->image = '/uploaded/image/' . $imageName;
            $property->save();
        }

        $property->property_name = $request->property_name;
        $property->SelectLocation_category_id = $request->category;


        $property->update();

        return redirect()->route('admin.Property_index');

        }

    public function property_delete($id){

        $property =Property::findOrFail($id);

        $property->delete();
        return redirect()->route('admin.Property_index');


    }
}
