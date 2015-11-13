@extends('/../layouts.master')
@section('content')
    <h2>{{ $category->name }}</h2>
    @if ($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
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
    @else
        <p>В этой категории нет постов</p>
    @endif

@stop

@section('profit_links')
    <p>
        {!! link_to_action('PostsThreadsController@getCreateNext', 'Создать пост', [
            'category_id' => $category->id,
            'parent_id' => 0
        ]) !!}
    </p>
@endsection