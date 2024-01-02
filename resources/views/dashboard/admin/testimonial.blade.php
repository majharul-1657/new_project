@extends('dashboard.admin.home');

@section('content')



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row " style="margin-left: 170px">
            <div class="col-md-12 my-5">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success" role='alert'>
                            {{ session('success') }}
                        </div>
                   @endif
                    <div class="card-header">
                        <h1 class="float-start" >Testimonial</h1>
                         <a href="{{route('admin.testimonial_create')}}" class="btn btn-outline-info btn-sm float-end mt-4 mb-3"> Add Testimonial </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr class="">
                                <th style="width: 10%;">SL</th>
                                <th style="width: 20%;">Name</th>
                                 <th style="width: 25%;">Designation</th>
                                <th style="width: 20%;">Image</th>
                                <th style="width: 30%;">Status</th>
                                <th style="width: 25%;">Action</th>

                            </tr>

                            @foreach($testimonial as $key=>$testimonials)
                             <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$testimonials->name}}</td>
                                <td>{{$testimonials->designation}}</td>
 
                                <td>
                                    <img src="{{asset($testimonials->image)}}" alt="" height="100px" width="90px">
                                </td>


                                <td class="center">
                                    @if($testimonials->status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">dective</span>
                                    @endif

                                    @if ($testimonials->status==1)

                                    <a href="{{ route('admin.testimonial_status',$testimonials->id) }}" class="btn btn-success">
                                        <i class="halflings-icon white thumbs-down">status</i>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.testimonial_status',$testimonials->id)}}" class="btn btn-danger" >
                                        <i class="halflings-icon white thumbs-up">status</i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{route('admin.testimonial_edit',$testimonials->id)}}" class="btn btn-info btn-sm ">Edit</a>
                                        <a href="{{route('admin.testimonial_delete',$testimonials->id)}}" class="btn btn-danger btn-sm ">Delete</a>
                                    </div>
                                </td>
                             </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


@endsection
