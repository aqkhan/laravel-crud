{{--Include Main layout--}}
@extends('layouts.main')

{{--Hook into content section--}}
@section('content')
    <form action="/posts" method="post">
        <input type="text" name="title" placeholder="Enter title">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter content"></textarea>
        {{csrf_field()}}
        <input type="submit" name="submit">
    </form>
    {!! Form::open() !!}
@endsection