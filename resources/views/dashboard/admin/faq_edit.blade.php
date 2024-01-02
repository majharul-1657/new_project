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
    <div class="row"  style="margin-left: 170px">
        <div class="col-md-12 my-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="float-start">Faq </h1>
                 </div>
                <div class="card-body">
                    <form action="{{route('admin.faq_update',$faq->id)}}" method="POST"enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control mb-3 " value="{{ $faq->question }}" name="question"
                            placeholder="enter name">

                        @if ($errors->has('question'))
                            <span class="text-danger" role="alert">{{ $errors->first('question') }}</span>
                        @endif
                        <input type="text" class="form-control mb-3 " value="{{ $faq->ans }}" name="ans"
                            placeholder="enter price">
                        @if ($errors->has('ans'))
                            <span class="text-danger" role="alert">{{ $errors->first('ans') }}</span>
                        @endif
                        <input type="submit" class="btn btn-outline-success w-100 " value="Update">

                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
