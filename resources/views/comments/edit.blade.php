@extends('main')

@section('title','| Edit Comment')

@section('content')
    <h1>Edit Comment</h1>
    <form action="/comments/{{$comment->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Name:</label>
            <input disabled type="text" class="form-control" id="name" name="name" value="{{$comment->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input disabled type="email" class="form-control" id="email" name="email" value="{{$comment->email}}">
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="5">{{$comment->comment}}</textarea>
        </div>
        <input type="submit" value="Submit Comment" class="btn btn-success">
    </form>
@endsection