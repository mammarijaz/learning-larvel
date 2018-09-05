@extends('layouts.app')
@section('content')
    <h1>Post-List</h1>
    @if( count($posts) > 0 )
        @foreach ($posts as $post)
               <div class="well">                   
                    <h3><a href={{url('/posts/'.$post->id)}}>{{$post->title}}</a></h3>
                    <small> {{$post->created_at}} </small>
               </div>    
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post availble</p>
    @endif

@endsection 