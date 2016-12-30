@extends('layouts.main')

@section('content')
    <h4><a href="{{route('posts.index')}}">Return to Posts</a></h4>
    <h4>Single post data</h4>
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
@endsection