@extends('main')

@section('title','| Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="auth/login" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox"> Remember me
                    </label>
                </div>
                <input type="submit" value="Login" class="btn btn-success btn-lg">
            </form>
        </div>
    </div>
@endsection