@extends('layouts.master')
@section('content')
    <div class="span12">
        @include('partials.post_show', ['forumpost' => $comments->first()])
    </div>

    @if ($comments->count() > 0)
        <h3>Комментарии:</h3>
        <div class="shifted-thread">
            <ul>
                @foreach($comments as $post)
                    <li class="no-markers"> @include('partials.thread_show_post', [
                        'post' => $post,
                        'id_first' => $comments->first()->id
                    ]) </li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('profit_links')
    @parent
@endsection