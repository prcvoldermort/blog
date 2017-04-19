@extends('main')

@section('title','| Create New Post')

@section('stylesheets')
<link rel="stylesheet" href="/css/parsley.css" type="text/css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="/posts" method="POST" data-parsley-validate>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input required maxlength="255" type="text" class="form-control" id="title" name="title" placeholder="here to enter title">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input required maxlength="255" minlength="5" type="text" class="form-control" id="slug" name="slug"
                           placeholder="here to input post slug, word separated with '-'">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea required class="form-control" id="body" name="body" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Create Post</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/parsley.min.js"></script>
@endsection