
@extends('dashboard.admin.home');

@section('content')
<div class="main-content">
    <section class="section" style="margin-left: 270px">
      <div class="section-header">
        <h1>Create Blog Category</h1>
        <div class="section-header-breadcrumb">
         </div>
      </div>

      <div class="section-body">
         <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.store_category') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12 mt-4">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label"> Name</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control " name="name" required>
                                    </div>
                                 </div>

                            </div>

                            <div class="control-group col-12 mt-3">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label"> Slug</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" name="slug" required>
                                    </div>
                                 </div>

                            </div>


                            <div class="control-group col-12 mt-3">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label"> Status</label>

                                    <select name="status" class="form-control col-5">
                                        <option class="input-xlarge form-control" value="1">{{__('Active')}}</option>
                                        <option class="input-xlarge form-control" value="0">{{__('Inactive')}}</option>
                                    </select>
                                 </div>

                            </div>



                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
      </div>
    </section>
  </div>



@endsection
