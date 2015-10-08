@extends('layouts.master')
@section('content')
    <h2>{{ $forumpost->title }}</h2>
    <p>{{ $forumpost->body }}</p>
    <pre>{{ $forumpost->code }}</pre>
    <hr/>
    @if ( $forumpost->pictures->count() > 0)
        @foreach ($forumpost->pictures as $picture)
            <img src="{{ GlideImage::load($picture->link)->modify(['w' => 100]) }}"/>
        @endforeach
    @endif
@stop

@section('profit_links')
    <p>
        {!! link_to_action('PostsThreadsController@getCreateNext', 'Комментировать', [
            'category_id' => $forumpost->category_id,
            'parent_id' => $forumpost->id
        ]) !!}
    </p>
    @parent
@endsection