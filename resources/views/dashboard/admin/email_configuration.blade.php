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
                        <h1 class="float-start" >Email Configuration</h1>
                    </div>
                    <div class="card-body ">
                        <table class="table table-responsive">

                            <div class="section-body">
                                <div class="row mt-4">
                                    <div class="col">
                                      <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('admin.Configuration_update') }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="name">Mail Host</label>
                                                        <input type="text" name="mail_host" value="{{ $email->mail_host }}" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" name="email" value="{{ $email->email }}" class="form-control">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="name">SMTP User Name</label>
                                                            <input type="text" name="smtp_username" value="{{ $email->smtp_username }}" class="form-control">
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="name">SMTP Password</label>
                                                            <input type="text" name="smtp_password" value="{{ $email->smtp_password }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="mail_port">Mail Port</label>
                                                            <input type="text" name="mail_port" value="{{ $email->mail_port }}" class="form-control" id="mail_port">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <label for="mail_encryption">Mail Encryption</label>
                                                            <select name="mail_encryption" id="mail_encryption" class="form-control">
                                                                <option {{ $email->mail_encryption=='tls' ? 'selected' :'' }} value="tls">TLS</option>
                                                                <option {{ $email->mail_encryption=='ssl' ? 'selected' :'' }} value="ssl">SSL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success mt-3">Update</button>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                              </div>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>


@endsection
