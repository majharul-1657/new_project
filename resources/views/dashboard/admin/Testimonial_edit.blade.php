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
                    <h1 class="float-start"> Edit Testimonial </h1>
                    <a href="{{route('admin.testimonial')}}" class="btn btn-outline-info btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.testimonial_update',$testimonial->id)}}" method="POST"enctype="multipart/form-data">
                        @csrf
                             {{--for image --}}
                       <input type="file" name="image" accept="image/*" class="form-control mb-3 ">
                       @if ($testimonial->image)
                           <div class="div">
                               <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                   height="50px" width="60px" class="rounded">
                           </div>
                       @endif
                        {{-- end image --}}
                        <input type="text" class="form-control mb-3 mt-3 " value="{{ $testimonial->name }}" name="name"
                            placeholder="enter name">

                        @if ($errors->has('name'))
                            <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                        @endif
                        <input type="text" class="form-control mb-3 " value="{{ $testimonial->designation }}" name="designation"
                            placeholder="enter price">
                        @if ($errors->has('designation'))
                            <span class="text-danger" role="alert">{{ $errors->first('designation') }}</span>
                        @endif
                        <input type="text" class="form-control mb-3 " value="{{ $testimonial->comment }}" name="comment"
                            placeholder="enter price">
                        @if ($errors->has('comment'))
                            <span class="text-danger" role="alert">{{ $errors->first('comment') }}</span>
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
