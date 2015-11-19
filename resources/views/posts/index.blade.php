@extends('/../layouts.master')
@section('content')
    <div class="row-fluid">
        <div class="span8">
            <h2>Раздел: {{ $category->name }}</h2>
        </div>
        <div class="span4">
            <a class="btn btn-large btn-success " href="/posts/create-next/{{ $category->id }}/0">Создать новое сообщение</a>
        </div>
    </div>
    @if ($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
                <li class="no-markers"> @include('partials.thread_show_post', [
                        'post' => $post,
                        'id_first' => -1
                ]) </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-error">В этой категории нет постов</div>
    @endif

@stop

@section('profit_links')
    @parent

@endsection