@extends('layouts.main')
@section('content')
    <h2>Create new Form Post</h2>
    {!! Form::open(['method' => 'POST', 'action' => 'FormPostsController@store']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Post Title: ', ['class' => 'awesome']) !!}
        {{--Where null is default value for that field--}}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Post') !!}
    </div>
    {!! Form::close() !!}
@endsection