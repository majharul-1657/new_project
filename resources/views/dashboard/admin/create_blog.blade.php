
@extends('dashboard.admin.home');

@section('content')

<div class="main-content" style="margin-left: 270px">
    <section class="section">

      <div class="section-body">

        <div class="section-header">
            <h1>Create Blog</h1>
            <div class="section-header-breadcrumb">
               </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.blog_store')}}" method="POST" enctype="multipart/form-data">
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

                            <div class="control-group col-12 mt-3">
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Title <span class="text-danger">*</span></label>
                             <div class="col-5">
                                <input type="text" id="title" class="input-xlarge form-control"  name="title" value="{{ old('title') }}" required>
                             </div>
                            </div>
                            </div>

                            <div class="control-group col-12 mt-3">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Slug <span class="text-danger">*</span></label>
                                 <div class="col-5">
                                    <input type="text" id="slug" class="form-control input-xlarge"  name="slug" value="{{ old('slug') }}" required>

                                 </div>
                                </div>
                            </div>

                            <div class="control-group col-12 mt-3">
                               <div class="form-group row">
                                <label class="col-2 col-form-label">Category <span class="text-danger">*</span></label>
                             <div class="col-5">
                                <select name="category" class="form-control select2" id="category">
                                    <option value=""> Category</option>
                                    @foreach ($categories as $category)
                                        <option {{ $category->id == old('category') ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                             </div>
                               </div>
                            </div>

                            <div class="control-group col-12 mt-3">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Description <span class="text-danger">*</span></label>
                                   <div class=" col-5">
                                    <textarea width="50px" name="description" id="editor" cols="30" rows="10" class="summernote form-control input-xlarge" required>{{ old('description') }}</textarea>
                                   </div>
                                </div>
                            </div>

                            <div class="control-group col-12 mt-3">
                              <div class="form-group row">
                                <label class="col-2 col-form-label">Show Homepage  <span class="text-danger">*</span></label>
                               <div class=" col-5">
                                <select name="show_homepage" class="form-control">
                                    <option value="0">{{__('admin.No')}}</option>
                                    <option value="1">{{__('admin.Yes')}}</option>
                                </select>
                               </div>
                              </div>
                            </div>

                            <div class="control-group col-12 mt-3">
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

                            <div class="control-group col-12 mt-3">
                               <div class="form-group row">
                                <label class="col-2 col-form-label">SEO Title</label>
                                <div class="col-5">
                                    <input type="text" class="form-control" name="seo_title" value="{{ old('seo_title') }}" required>

                                </div>
                            </div>
                            </div>

                            <div class="control-group col-12 mt-3">
                               <div class="form-group row">
                                <label class="col-2 col-form-label">SEO Description</label>
                                <div class="col-5">
                                    <textarea name="seo_description" id="Editor2" cols="30" rows="10" class="form-control text-area-5" required>{{ old('seo_description') }}</textarea>

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

