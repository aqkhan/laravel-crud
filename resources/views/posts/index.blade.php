{{--Include Main layout--}}
@extends('layouts.main')

{{--Hook into content section--}}
@section('content')
    <h2>Retrieving all posts</h2>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a> ||| <a href="{{route('posts.edit', $post->id)}}">Edit</a></li>
        @endforeach
    </ul>
@endsection