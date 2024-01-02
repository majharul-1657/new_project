
@extends('dashboard.admin.home');

@section('content')

     <div class="main-content" style="margin-left: 270px">

      <div class="section-body">
        <div class="row mt-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.update_terms_condition',$termsAndCondition->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group col-12 mt-5">
                            <div class="row  form-group" >
                                     <label for=" " class="col-2 col-form-label">Terms And Conditions</label>

                                     <div class="col-5">
                                        <textarea name="terms_condition" cols="20" rows="10" class="summernote input-xlarge form-control">{!! ($termsAndCondition->terms_condition) !!}</textarea>

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
@endsection
