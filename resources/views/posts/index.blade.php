@extends('layouts.master')
@section('content')
    <h2>{{ $category }}</h2>
    @if ($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    @else
        <p>В этой категории нет постов</p>
    @endif

@stop