@extends('layout')

@section('content')
    @component('title')
        Příspěvky
    @endcomponent

    <ul class="posts">
        @foreach($posts as $post)
            <li>
                <a href="{{ route('post', $post) }}">{{ $post->message }}</a>
            </li>
        @endforeach
    </ul>
@endsection