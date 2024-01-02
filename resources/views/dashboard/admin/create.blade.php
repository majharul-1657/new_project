 @extends('dashboard.admin.home');

@section('content')

<section class="content " style="margin-left: 270px">
    <div class="container-fluid">
        <div class="row-fluid sortable">
            <div class="box ">
                  <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
                  </div>
                    <div class="box-content">
                       <form class="form-horizontal" method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            <div class="control-group">



                                <div class="form-group row">
                                    <label for=" " class="col-sm-2 col-form-label">Icon</label>
                                     <div class="col-sm">
                                        <input type="file" name='icon' required>
                                        @if($errors->has('icon'))
                                        <span class="text-danger" role="alert">{{ $errors->first('icon')}}</span>
                                    @endif
                                    </div>
                                 </div>

                             </div>

                            <div class="control-group mt-5 mb-5">


                                <div class="form-group row">
                                    <label for=" " class="col-sm-2 col-form-label">Image</label>
                                     <div class="col-sm">
                                        <input type="file" name='image' required>
                                        @if($errors->has('image'))
                                        <span class="text-danger" role="alert">{{ $errors->first('image')}}</span>
                                    @endif
                                    </div>
                                 </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group row">
                                    <label for=" " class="col-sm-2 col-form-label">Category Name</label>
                                     <div class="col-sm">
                                        <input type="text" class="input-xlarge form-control" name="name" required>
                                        @if($errors->has('name'))
                                        <span class="text-danger" role="alert">{{ $errors->first('name')}}</span>
                                    @endif
                                    </div>
                                 </div>

                            </div>

                            <div class="control-group mt-2">


                                <div class="form-group row">
                                    <label for=" " class="col-sm-2 col-form-label">Slage</label>
                                     <div class="col-sm">
                                        <input type="text" class="input-xlarge form-control" name="slage" required>
                                        @if($errors->has('slag'))
                                    <span class="text-danger" role="alert">{{ $errors->first('slage')}}</span>
                                       @endif
                                    </div>
                                 </div>

                            </div>


                            <div class="form-actions mt-5">
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </div>
                           </fieldset>
                          </form>
                        </div>
                     </div>
                </div>
            </div>
         </div>
     </section>


@endsection
