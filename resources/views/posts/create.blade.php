@extends('main')

@section('title','| Create New Post')

@section('stylesheets')
<link rel="stylesheet" href="/css/parsley.css" type="text/css">
<link rel="stylesheet" href="/css/select2.min.css" type="text/css">
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="/posts" method="POST" data-parsley-validate enctype="multipart/form-data">
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
                    <label for="category_id">Category:</label>
                    <select id="category_id" name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
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
                    <label for="featured_image">Upload Featured Image:</label>
                    <input type="file" class="form-control" id="featured_image" name="featured_image">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block">Create Post</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/parsley.min.js"></script>
    <script type="text/javascript" src="/js/select2.min.js"></script>

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection