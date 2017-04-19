@extends('main')

@section('title','| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="auth/register" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                           placeholder="Password">
                </div>
                <input type="submit" value="Register" class="btn btn-success btn-lg">
            </form>
        </div>
    </div>
@endsection