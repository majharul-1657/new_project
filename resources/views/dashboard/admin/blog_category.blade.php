
@extends('dashboard.admin.home');

@section('content')

   <!-- Main Content -->
   <div class="main-content" >
    <section class="section">


      <div class="section-body" style="margin-left: 270px">
        <a href="{{route('admin.create_category')}}" class="btn btn-primary float-end"><i class="fas fa-plus"></i> Add New</a>
        <div class="section-header">
            <h1>Blog Category</h1>
            <div class="section-header-breadcrumb">
               </div>
          </div>
        <div class="row mt-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $category)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        @if($category->status == 1)
                                        <a href="javascript:;" onclick="changeBlogCategoryStatus({{ $category->id }})">
                                            <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                        </a>

                                        @else
                                        <a href="javascript:;" onclick="changeBlogCategoryStatus({{ $category->id }})">
                                            <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                        </a>

                                        @endif
                                    </td>

                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.edit_category',$category->id)}}" class="btn btn-info btn-sm ">Edit</a>
                                        <a href="{{route('admin.delete_category',$category->id)}}" class="btn btn-danger btn-sm ">Delete</a>
                                    </div>
                                </td>
                                </tr>
                              @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>
  </div>


@endsection
