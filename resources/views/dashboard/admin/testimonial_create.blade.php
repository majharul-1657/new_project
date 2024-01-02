 @extends('dashboard.admin.home');

@section('content')

<section class="content " style="margin-left: 270px">
    <div class="container-fluid">
        <div class="row-fluid sortable">
            <div class="box ">
                  <div class="box-header" data-original-title>
                    <h2 class="mt-3"><i class="halflings-icon edit"></i><span class="break"></span>Create Testimonial</h2>
                  </div>
                    <div class="box-content">
                       <form class="form-horizontal" method="POST" action="{{route('admin.testimonial_store')}}" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            <div class="control-group mt-5 ">


                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label">Image</label>
                                     <div class="col-5">
                                        <input type="file" name='image' required>
                                        @if($errors->has('image'))
                                        <span class="text-danger" role="alert" >{{ $errors->first('image')}}</span>
                                    @endif
                                    </div>
                                 </div>
                            </div>
                            <div class="control-group mt-4">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label" >Name</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" required name="name">
                                        @if($errors->has('name'))
                                        <span class="text-danger" role="alert" >{{ $errors->first('name')}}</span>
                                    @endif
                                    </div>
                                 </div>

                            </div>

                            <div class="control-group mt-4">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label">designation</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" name="designation" required>
                                        @if($errors->has('Desgination'))
                                    <span class="text-danger" role="alert">{{ $errors->first('Desgination')}}</span>
                                       @endif
                                    </div>
                                 </div>

                            </div>


                            <div class="control-group mt-4">
                                <div class="form-group row">
                                    <label for=" " class="col-1 col-form-label">Comment</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" name="comment" required>
                                        @if($errors->has('comment'))
                                    <span class="text-danger" role="alert">{{ $errors->first('comment')}}</span>
                                       @endif
                                    </div>
                                 </div>

                            </div>

                            <div class="form-actions mt-5">
                                <button type="submit" class="btn btn-primary">Save</button>
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

