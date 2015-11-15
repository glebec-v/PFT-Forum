<div class="post-unit">
    @if ($post->id !== $id_first)
        <h4>{{ $post->title }}</h4>
        <p>{{ mb_substr($post->body, 0, 150) }}...</p>
        <p>
            <a class="btn btn-success btn-small" href="/post/{{$post->id}}">Читать далее</a>
            @if ($post->child)
                <a class="btn btn-primary btn-small" href="/posts/comments/{{$post->id}}">Комментарии</a>
            @endif
            <i class="icon-user"></i>{{ $post->user->name }}
        </p>
    @endif
</div>