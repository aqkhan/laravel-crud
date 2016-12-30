@extends('layouts.main')
@section('content')
    <h4><a href="{{route('form-posts.create')}}">Create new post</a></h4>
    <h2>Main Form Posts page</h2>
    <ul>
        @foreach($posts as $post)
            <li><a href="/form-posts/{{$post->id}}/edit">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection