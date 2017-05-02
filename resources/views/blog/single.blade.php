@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <hr>
            <p>Posted In: {{$post->category->name}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comments as $comment)
                <div class="comment">
                    <p>Name: {{$comment->name}}</p>
                    <p>Comment:<br>
                        {{$comment->comment}}
                    </p><br><br>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div id="comment-form">
            <form action="/comments/{{$post->id}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="comment" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Add Comment" class="btn btn-success btn-block">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection