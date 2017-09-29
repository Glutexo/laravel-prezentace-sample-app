@extends('layout')

@section('content')
    <div class="title m-b-md">
        Příspěvky
    </div>

    <ul class="posts">
        @foreach($posts as $post)
            <li>
                <a href="{{ route('post', $post) }}">{{ $post->message }}</a>
            </li>
        @endforeach
    </ul>
@endsection