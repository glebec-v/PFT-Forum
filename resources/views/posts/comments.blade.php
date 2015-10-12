@extends('layouts.master')
@section('content')
    @if ($comments->count() > 0)
        <ul>
            @foreach($comments as $post)
                <li>
                    @if ($post->child)
                        К этому посту имеются комментарии:
                        {!! link_to('posts/comments/'.$post->id, $post->title) !!}
                        {!! link_to('post/'.$post->id, 'Посмотреть пост') !!}
                    @else
                        {!! link_to('post/'.$post->id, $post->title) !!}
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@stop

@section('profit_links')
    <p>
        {!! link_to_action('PostsThreadsController@getCreateNext', 'Продолжить дискуссию', [
            'category_id' => $firstpost->category_id,
            'parent_id' => $firstpost->id
        ]) !!}
    </p>
    @parent
@endsection