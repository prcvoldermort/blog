@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class="lead">{{$post->body}}</p>
            <hr>
            <div class="tags">
                @foreach($post->tags as $tag)
                    <span class="label label-default">{{$tag->name}}</span>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Slug URL</dt>
                    <dd>{{url('blog/'.$post->slug)}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Category:</dt>
                    <dd>{{$post->category->name}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{date('M j, Y H:i',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j, Y H:i',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <form action="/posts/{{$post->id}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn btn-danger btn-block" value="delete">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="/posts" class="btn btn-default btn-block" style="margin-top: 10px"><< See All Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection