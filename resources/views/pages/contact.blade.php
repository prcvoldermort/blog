@extends('main')

@section('title','contact')
@section('content')
    <div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form action="/contact" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" class="form-control">Type something here...</textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-success">
        </form>
    </div>
</div>
@endsection
