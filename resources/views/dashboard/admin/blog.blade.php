

@extends('dashboard.admin.home');

@section('content')


      <div class="section-body" style="margin-left: 270px">
        <a href="{{route('admin.blog_create')}}" class="btn btn-primary mt-3 float-end"><i></i>Add New</a>
        <div class="section-header">
            <h1 class="mt-3">Blog </h1>
            <div class="section-header-breadcrumb">
               </div>
          </div>
        <div class="row mt-4" >
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th width="5%">SN</th>
                                <th width="25%">Title</th>
                                <th width="15%">Category</th>
                                <th width="10%">Image</th>
                                <th width="10%">Show Homepage</th>
                                <th width="15%">Status</th>
                                <th width="15%">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $index => $blog)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><a href="">{{ $blog->title }}</a></td>
                                    <td>{{ $blog->category->name }}</td>
                                    <td><img src="{{ asset($blog->image) }}" width="80px" height="80px"  alt=""></td>
                                    <td>
                                        @if ($blog->show_homepage)
                                            <span class="badge badge-success">{{__('admin.Yes')}}</span>
                                        @else
                                        <span class="badge badge-danger">{{__('admin.No')}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($blog->status == 1)
                                        <a href="javascript:;" onclick="changeBlogStatus({{ $blog->id }})">
                                            <input id="status_toggle" type="checkbox" checked data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                        </a>

                                        @else
                                        <a href="javascript:;" onclick="changeBlogStatus({{ $blog->id }})">
                                            <input id="status_toggle" type="checkbox" data-toggle="toggle" data-on="{{__('admin.Active')}}" data-off="{{__('admin.Inactive')}}" data-onstyle="success" data-offstyle="danger">
                                        </a>

                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{route('admin.edit_blog',$blog->id)}}" class="btn btn-info btn-sm ">Edit</a>
                                            <a href="{{route('admin.delete_blog',$blog->id)}}" class="btn btn-danger btn-sm ">Delete</a>
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
