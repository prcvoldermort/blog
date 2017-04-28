@extends('main')

@section('title','| All Tags')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td><a href="/tags/{{$tag->id}}">{{$tag->name}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="well">
                <form action="/tags" method="post">
                    <h2>New Tag</h2>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" id="name" class="form-control" type="text">
                    </div>
                    <input type="submit" value="Submit New Tag" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

@endsection