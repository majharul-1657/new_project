 @extends('dashboard.admin.home');

@section('content')

<section class="content " style="margin-left: 270px">
    <div class="container-fluid">
        <div class="row-fluid sortable">
            <div class="box ">
                  <div class="box-header" data-original-title>
                    <h2 class="mt-4"><i class="halflings-icon edit"></i><span class="break"></span>Create FAQ</h2>
                  </div>
                    <div class="box-content">
                       <form class="form-horizontal" action="{{route('admin.faq_store')}}" enctype="multipart/form-data">
                        @csrf
                        <fieldset>

                            </div>
                            <div class="control-group">
                                <div class="form-group row mt-5">
                                    <label for=" " class="col-1 col-form-label">question</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" name="question">
                                        @if($errors->has('question'))
                                        <span class="text-danger" role="alert">{{ $errors->first('question')}}</span>
                                    @endif
                                    </div>
                                 </div>

                            </div>

                            <div class="control-group mt-2">


                                <div class="form-group row mt-5">
                                    <label for=" " class="col-1 col-form-label">Answer</label>
                                     <div class="col-5">
                                        <input type="text" class="input-xlarge form-control" name="ans">
                                        @if($errors->has('ans'))
                                    <span class="text-danger" role="alert">{{ $errors->first('ans')}}</span>
                                       @endif
                                    </div>
                                 </div>

                            </div>


                            <div class="control-group col-12">
                              <div class="form-group row mt-5">
                                <label class="col-1"><span class="text-danger col-form-label"> </span>Status</label>
                                <select name="status" class="form-control col-5">
                                    <option value="1">{{__('admin.Active')}}</option>
                                    <option value="0">{{__('admin.Inactive')}}</option>
                                </select>
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
