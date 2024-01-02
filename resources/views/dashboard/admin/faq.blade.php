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
        <div class="row " style="margin-left: 150px">
            <div class="col-12 my-5">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success" role='alert'>
                            {{ session('success') }}
                        </div>
                   @endif
                    <div class="card-header">
                        <h1 class="float-start" >FAQ</h1>
                    <a href="{{route('admin.faq_add')}}" class="btn btn-outline-info btn-sm float-end"> Add Faq </a>
                    </div>
                    <div class="card-body ">
                        <table class="table table-responsive" >
                            <tr class="">
                                <th style="width: 10%;">SL</th>
                                <th style="width: 20%;">question</th>
                                <th style="width: 50%;">Answer</th>
                                <th style="width: 50%;">Status</th>
                                <th style="width: 25%;">Action</th>

                            </tr>

                           @foreach($faq as $key=>$faqs)
                             <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$faqs->question}}</td>
                                <td>{{$faqs->ans}}</td>

                                <td class="center">
                                    @if($faqs->status==1)
                                    <span class="label label-success">Active</span>
                                    @else
                                    <span class="label label-danger">dective</span>
                                    @endif

                                    @if ($faqs->status==1)

                                    <a href="{{ route('admin.faq_status',$faqs->id) }}" class="btn btn-success">
                                        <i class="halflings-icon white thumbs-down">status</i>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.faq_status',$faqs->id)}}" class="btn btn-danger" >
                                        <i class="halflings-icon white thumbs-up">status</i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group" id="delete-user-form">
                                        <a href="{{route('admin.faq_edit',$faqs->id)}}" class="btn btn-info btn-sm ">Edit</a>
                                        <a href="{{route('admin.faq_delete',$faqs->id)}}" id="delete-user" class="btn btn-danger btn-sm button show_confirm">Delete</a>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {

            e.preventDefault();
        }
    });
</script>
@endsection
