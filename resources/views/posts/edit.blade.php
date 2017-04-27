@extends('main')

@section('title','| Edit the post')

@section('content')
    <div class="row">
        <form action="/posts/{{$post->id}}" method="post">
            {{csrf_field()}}
        <div class="col-md-8">
            <div class="form-group">
                <label for="title"></label>
                <input required maxlength="255" type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="slug"></label>
                <input required minlength="5" maxlength="255" type="text" class="form-control" id="slug" name="slug"
                       value="{{$post->slug}}">
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select id="category_id" name="category_id" class="form-control">
                    @foreach($categories as $category)
                        @if($category->id == $post->category_id)
                            <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea required class="form-control" id="body" name="body" rows="5">{{$post->body}}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
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
                        <a href="/posts/{{$post->id}}" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="col-sm-6">
                        <input type="submit" href="/posts/{{$post->id}}" class="btn btn-success btn-block">
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection