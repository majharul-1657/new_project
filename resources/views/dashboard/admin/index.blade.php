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
        <div class="row " style="margin-left: 160px">
            <div class="col-md-12 my-5">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success" role='alert'>
                            {{ session('success') }}
                        </div>
                   @endif
                    <div class="card-header">
                        <h1 class="float-start" > Category list</h1>
                         <a href="{{route('admin.create_cat')}}" class="btn btn-outline-info btn-sm float-end"> Add Category </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr class="">
                                <th style="width: 10%;">SL</th>
                                <th style="width: 20%;">Name</th>
                                <th style="width: 20%;">Slage</th>
                                <th style="width: 15%;">Icone</th>
                                <th style="width: 15%;">Image</th>
                                <th style="width: 150%;">Status</th>
                                <th style="width: 25%;">Action</th>

                            </tr>

                            @foreach($categore as $key=>$categores)
                             <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$categores->name}}</td>
                                <td>{{$categores->slage}}</td>

                                <td>
                                    <img src="{{asset($categores->icon)}}" alt="" height="100px" width="90px">
                                </td>
                                <td>
                                    <img src="{{asset($categores->image)}}" alt="" height="100px" width="90px">
                                </td>


                                <td class="center">
                                    @if($categores->status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">dective</span>
                                    @endif

                                    @if ($categores->status==1)

                                    <a href="{{ route('admin.status',$categores->id) }}" class="btn btn-success">
                                        <i class="halflings-icon white thumbs-down">status</i>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.status',$categores->id)}}" class="btn btn-danger" >
                                        <i class="halflings-icon white thumbs-up">status</i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{route('admin.edit',$categores->id)}}" class="btn btn-info btn-sm ">Edit</a>
                                        <a href="{{route('admin.delete',$categores->id)}}" class="btn btn-danger btn-sm ">Delete</a>
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
