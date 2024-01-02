
@extends('dashboard.admin.home');

@section('content')

<div class="main-content" style="margin-left: 270px">
    <section class="section">

      <div class="section-body">
        <a href="" class="btn btn-primary"><i class="fas fa-list"></i> Blog</a>
        <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <form action=" {{route('admin.update_property',$property->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Thumbnail Image Preview</label>
                                <div>
                                    <input type="file" name="image" accept="image/*" class="form-control mb-3 ">
                                    <img  class="admin-img" src="{{ asset($property->image) }}" alt="" width="100px">
                                </div>
                            </div>




                            <div class="control-group col-12">
                                <div class="form-group row">
                                    <label class="col-sm- col-form-label">Property Name <span class="text-danger">*</span></label>
                                     <div class="col-sm">
                                        <input type="text" id="property_name" class="form-control"  name="property_name" value="{{ $property->property_name }}">

                                     </div>
                                </div>
                            </div>

                            <div class="control-group col-12">
                               <div class="form-group row">
                                <label class="col-sm- col-form-label">Category <span class="text-danger">*</span></label>
                              <div class="col-sm">
                                <select name="category" class="form-control select2" id="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $categorie)
                                        <option {{ $categorie->id == $property->SelectLocation_category_id ? 'selected' : '' }} value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                               </div>
                            </div>

                            <div class="control-group col-12">
                               <div class="form-group row">
                                <label  class="col-sm- col-form-label">Status <span class="text-danger">*</span></label>
                               <div class="col-sm">
                                <select name="status" class="form-control">
                                    <option {{ $property->status == 1 ? 'selected' : '' }} value="1">{{__('admin.Active')}}</option>
                                    <option {{ $property->status == 0 ? 'selected' : '' }} value="0">{{__('admin.Inactive')}}</option>
                                </select>
                               </div>
                               </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
      </div>
    </section>
  </div>

<script>
(function($) {
    "use strict";
    $(document).ready(function () {
        $("#title").on("focusout",function(e){
            $("#slug").val(convertToSlug($(this).val()));
        })
    });
})(jQuery);

function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-');
    }


function previewThumnailImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview-img');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

</script>
@endsection
