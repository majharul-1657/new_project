
@extends('dashboard.admin.home');

@section('content')

     <div class="main-content" style="margin-left: 270px">

      <div class="section-body">
        <div class="row mt-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.update_Privacy_Policy',$PrivacyPolicy->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="control-group ">
                        <div class="form-group row" >
                                 <label for=" " class="col-2 col-form-label">PrivacyPolicy</label>
                                   <div class="col-5">
                                    <textarea name="Privacy_Policy" cols="20" rows="10" class="summernote input-xlarge form-control">{!! ($PrivacyPolicy->Privacy_Policy) !!}</textarea>
                                </div>
                        </div>
                      </div>
                        <div class="row">
                            <div class="col-12 mt-5">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
      </div>
    </section>

@endsection
