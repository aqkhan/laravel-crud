@extends('layouts.main')
@section('content')
    <h4><a href="{{route('form-posts.index')}}">Return to posts</a></h4>
    <h2>Edit post</h2>
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['FormPostsController@update', $post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title of the post', ['class' => 'fabulous']) !!}
        {!! Form::text('title', null, ['class' => 'fabulous']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Edit Post', ['class' => 'fabulous']) !!}
    </div>
    {!! Form::close() !!}
    <h2>Delete Post</h2>
    {!! Form::model($post, ['method' => 'DELETE', 'action' => ['FormPostsController@destroy', $post->id]]) !!}
    {!! Form::submit('Delete Post :(', ['class' => 'red']) !!}
    {!! Form::close() !!}
@endsection