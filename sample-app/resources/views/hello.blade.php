@extends('layout')

@section('content')
    @component('title')
        Hello, {{ $what }}!
    @endcomponent
@endsection
