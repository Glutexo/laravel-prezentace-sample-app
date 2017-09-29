@extends('layout')

@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href="{{ route('hello', 'world') }}">Hello</a>
        <a href="{{ route('posts') }}">Posts</a>
    </div>
@endsection
