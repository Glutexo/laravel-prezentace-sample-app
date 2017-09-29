@extends('layout')

@section('content')
    <div class="title m-b-md">
        {{ $post->message }}
    </div>

    <a class="link" href="{{ route('posts') }}">« Zpět</a>
@endsection