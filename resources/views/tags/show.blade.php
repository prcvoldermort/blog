@extends('main')

@section('title',"| $tag->name Tag")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$tag->name}} Tag
                <small>{{$tag->posts->count()}} Posts</small>
            </h1>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <a href="/tags/{{$tag->id}}/edit" class="btn btn-primary pull-right">Edit</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tag->posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>@foreach($post->tags as $tag)
                                <span class="label label-default">{{$tag->name}}</span>
                            @endforeach
                        </td>
                        <td><a href="/posts/{{$post->id}}" class="btn btn-default btn-sm">View</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection