@extends('layout')

@section('content')
    @component('title')
        Laravel
    @endcomponent

    <div class="links">
        <a href="{{ route('hello', 'world') }}">Hello</a>
        <a href="{{ route('posts') }}">Posts</a>
    </div>
@endsection
