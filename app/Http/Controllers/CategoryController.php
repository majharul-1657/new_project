<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
//use App\Services\Image;
use Intervention\Image\Facades\Image;
use File;
use App\Models\categore;
use Illuminate\Http\Request;
use PHPUnit\Util\Printer;
class CategoryController extends Controller
{


    public function index(){
        $categore=categore::all();

        return view('dashboard.admin.index',compact('categore'));
    }
    public function create_cat(){
        return view('dashboard.admin.create');
    }



    public function store(request $request){

        $category = new categore();

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $category->image = '/uploaded/image/' . $imageName;

        }

        if($request->hasFile('icon')){
            $icon=$request->file('icon');
            $iconename = time().'-'. uniqid().'.'. $icon->getClientoriginalExtension();
            $icon->move(public_path('uploaded/icon'), $iconename);
            $category->icon = '/uploaded/icon/' . $iconename;

        }

        $category->name = $request->name;
        $category->slage =$request->slage;
        $category->save();

        return redirect()->route('admin.index')->with('success','Data Insert Successfully.');

    }
public function edit($id){

    $categores =categore::findOrFail($id);
    return view('dashboard.admin.edit',compact('categores'));

}

public function update(request $request ,$id){

$categore=categore::findOrFail($id);

if ($request->hasFile('image')) {
    $image = $request->file('image');

    if ($categore->image) {
        Storage::delete($categore->image);
    }

    $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploaded/image'), $imageName);
    $categore->image = '/uploaded/image/' . $imageName;
    $categore->save();
}

if ($request->hasFile('icon')) {
    $icon = $request->file('icon');

    if ($categore->icon) {
        Storage::delete($categore->icon);
    }
    $iconename = time() . '-' . uniqid() . '.' . $icon->getClientOriginalExtension();
    $icon->move(public_path('uploaded/icon'), $iconename);
    $categore->icon = '/uploaded/icon/' . $iconename;
    $categore->save();
}




$categore->name= $request->name;
$categore->slage = $request->slage;

$categore->update();

return redirect()->route('admin.index')->with('success','Data Insert Successfully.');

}


public function cat_status(categore $categore)
{

    if($categore->status==1){
        $categore->update(['status'=>0]);
    }else{
        $categore->update(['status'=>1]);
    }
     return redirect()->back();
}

public function delete($id){
        $categore= categore::findOrFail($id);
        $categore->delete();
        return redirect()->back();
    }
}

