@extends('layouts.app')
@section('content')
  <a href={{url('/posts/')}} class="btn btn-default">Back To Posts </a>
    <h1>{{$post->title}}</h1>
    <div>
       <p> {{$post->body}} </p> 
    </div>
    <small>{{$post->created_at}}</small>
    <a href={{url('/posts/'.$post->id.'/edit')}} class="btn btn-default">Edit</a>
    <form action={{ action('PostsController@destroy',['id' => $post->id]) }} method="post" class="pull-right">
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
      <input name="_method" type="hidden" value="DELETE"/>
      <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
@endsection 