@extends('layout')

@section('title', 'CONTACTZ')

@section('content')
    <h1>{{ $title }}</h1>
    <img src="{{ $path }}">
    <br>
    {{ $path }}
    <br>
    <a href="/">GO HOME</a>
@endsection