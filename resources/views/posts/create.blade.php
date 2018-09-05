@extends('layouts.app')
@section('content')
    <h1>Create</h1>

    <form action={{ action('PostsController@store') }} method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" ></input>
            <label class="form-check-label" for="exampleCheck1">Posts Title</label>
        </div>
        <div class="form-group">
            <textarea class="form-control" id="body-ckeditor" name="body" rows="3"></textarea>
            <label class="form-check-label" for="exampleCheck1">Posts Content</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection 