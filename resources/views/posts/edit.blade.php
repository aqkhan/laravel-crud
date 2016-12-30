@extends('layouts.main')
@section('content')
    <h4><a href="{{route('posts.index')}}">Return to posts</a></h4>
    <h2>Edit Post {{$post->title}}</h2>
    <form action="/posts/{{$post->id}}" method="post">
        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter content" >{{$post->content}}</textarea>
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="submit" name="submit">
    </form>
    <h2>Delete post: {{$post->title}}</h2>
    <form action="/posts/{{$post->id}}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
        <input type="submit" value="DELETE">
    </form>
@endsection