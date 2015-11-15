@extends('layouts.master')
@section('content')
    <div class="span12">
        @include('partials.post_show', ['forumpost' => $comments->first()])
    </div>
    <div id="contentOuterSeparator"></div>
    <h3>Комментарии:</h3>
    @if ($comments->count() > 0)
        <div class="shifted-thread">
            <ul>
                @foreach($comments as $post)
                    <li> @include('partials.thread_show') </li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('profit_links')
    <p>
        {!! link_to_action('PostsThreadsController@getCreateNext', 'Продолжить дискуссию', [
            'category_id' => $comments->first()->category_id,
            'parent_id' => $comments->first()->id
        ]) !!}
    </p>
    @parent
@endsection