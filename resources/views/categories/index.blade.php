@extends('main')

@section('title','| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <form action="/categories" method="post">
                    <h2>New Category</h2>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" id="name" class="form-control" type="text">
                    </div>
                    <input type="submit" value="Submit New Category" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

@endsection