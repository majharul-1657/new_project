
@extends('dashboard.admin.home');

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section" style="margin-left: 270px">
          <div class="section-header" >
            <h1>Edit Blog Category</h1>
          </div>

          <div class="section-body" >
            <a href="" class="btn btn-primary"><i class="fas fa-list"></i> Blog Category</a>
            <div class="row mt-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.update_category',$categores->id) }}" method="POST">
                            @csrf
                             <div class="row">
                                <div class="form-group col-12">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control"  name="name" value="{{ $categores->name }}">
                                </div>
                                <div class="form-group col-12">
                                    <label>Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="slug" class="form-control"  name="slug" value="{{ $categores->slug }}">
                                </div>
                                <div class="form-group col-12">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control">
                                        <option {{ $categores->status == 1 ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ $categores->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                                    </select>
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
            $("#name").on("focusout",function(e){
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
</script>


@endsection

