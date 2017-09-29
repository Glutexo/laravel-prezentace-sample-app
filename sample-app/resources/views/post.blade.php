@extends('layout')

@section('content')
    @component('title')
        {{ $post->message }}
    @endcomponent

    <a class="link" href="{{ route('posts') }}">« Zpět</a>
@endsection