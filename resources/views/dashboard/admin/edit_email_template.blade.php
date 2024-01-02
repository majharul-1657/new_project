
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
                    <h1 class="float-start"> Edit Email Template </h1>
                 </div>
                <div class="card-body">

                        <form action="{{ route('admin.email_template_upd',$template->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $template->subject }}" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="">Description <span class="text-danger">*</span></label>
                                <textarea name="description" cols="30" rows="10" class="form-control summernote">{{ $template->description }}</textarea>
                            </div>
                            <button class="btn btn-success" type="submit">Update</button>
                        </form>


                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

@endsection

