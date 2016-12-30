@extends('layouts.main')
@section('content')
    <h4><a href="{{route('form-posts.index')}}">Back to main page</a></h4>
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
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection