
@extends('dashboard.admin.home');

@section('content')

<div class="main-content" style="margin-left: 270px">
    <section class="section">

      <div class="section-body">

        <div class="section-header">
            <h1>Create Property</h1>
            <div class="section-header-breadcrumb">
               </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.property_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="control-group col-12 mt-5">
                             <div class="form-group row">
                                <label class="col-2 col-form-label">Thumbnail Image <span class="text-danger">*</span></label>
                                <div class="col-5">
                                    <input type="file" class="form-control-file nput-xlarge form-control"  name="image" onchange="previewThumnailImage(event)" required>

                                </div>
                            </div>
                            </div>

                            <div class="control-group col-12 mt-4">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Property Name <span class="text-danger">*</span></label>
                                 <div class="col-5">
                                    <input type="text" id="property_name" class="form-control input-xlarge"  name="property_name" value="{{ old('property_name') }}" required>

                                 </div>
                                </div>
                            </div>

                            <div class="control-group col-12 mt-4">
                               <div class="form-group row">
                                <label class="col-2 col-form-label">Category <span class="text-danger">*</span></label>
                             <div class="col-5">
                                <select name="category" class="form-control select2" id="category">
                                    <option value=""> Category</option>
                                   @foreach ($categories as $category)
                                        <option {{ $category->id == old('category') ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach


                                    {{-- @foreach ($categories as $category)
                                    <option {{ $category->id == old('category') ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>


                                    @endforeach --}}
                                </select>
                             </div>
                               </div>
                            </div>

                            <div class="control-group col-12 mt-4">
                               <div class="form-group row">
                                <label class="col-2 col-form-label">Status <span class="text-danger">*</span></label>
                                <div class="col-5">
                                   <select name="status" class="form-control">
                                       <option value="1">{{__('admin.Active')}}</option>
                                       <option value="0">{{__('admin.Inactive')}}</option>
                                   </select>
                                </div>
                               </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12 mt-5">
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






  <script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#Editor2' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>


@endsection

