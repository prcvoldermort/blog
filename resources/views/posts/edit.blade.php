@extends('main')

@section('title','| Edit the post')

@section('stylesheets')
    <link rel="stylesheet" href="/css/parsley.css" type="text/css">
    <link rel="stylesheet" href="/css/select2.min.css" type="text/css">
@endsection

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
                <label for="tags">Tags:</label>
                <select id="tags" name="tags[]" class="form-control select2-multi" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
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

@section('scripts')
    <script type="text/javascript" src="/js/parsley.min.js"></script>
    <script type="text/javascript" src="/js/select2.min.js"></script>
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({{json_encode($post->tags()->allRelatedIds())}}).trigger('change');
    </script>
@endsection