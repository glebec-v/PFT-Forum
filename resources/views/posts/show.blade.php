@extends('layouts.master')
@section('content')
    <h2>{{ $forumpost->title }}</h2>
    <p>{{ $forumpost->content->content }}</p>
    <pre>{{ $forumpost->content->code }}</pre>
    <hr/>
    @if ( $forumpost->pictures->count() > 0)
        <ul>
            @foreach ($forumpost->pictures as $picture)
                <li><img src="{{ $picture->link }}" height="240" width="320"></li>
            @endforeach
        </ul>
    @endif
@stop