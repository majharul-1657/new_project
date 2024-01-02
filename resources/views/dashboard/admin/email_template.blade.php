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

    <div class="container ">
        <div class="row " style="margin-left: 140px">
            <div class="col-12 my-5">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success" role='alert'>
                            {{ session('success') }}
                        </div>
                   @endif
                    <div class="card-header">
                        <h1 class="float-start" >Email Template</h1>
                     </div>
                    <div class="card-body ">
                        <table class="table table-responsive">
                            <tr class="">
                                <th style="width: 25%;">SL</th>
                                <th style="width: 35%;">Email Template</th>
                                <th style="width: 35%;">Subject</th>
                                 <th style="width: 35%;">Action</th>

                            </tr>

                            @foreach ($templates as $index => $item)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{$item->name }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>
                                    <a  href="{{ route('admin.editemail_template',$item->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</a>
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
