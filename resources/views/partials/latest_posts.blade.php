@foreach( $posts as $post)
    <p>
        <a href="/post/{{ $post->id }}">{{ $post->title }}</a><br />
        <span style="text-transform:none;">{{ $post->updated_at }}</span>
        <span style="text-transform:none;">{{ $post->user->name }}</span>
    </p>
@endforeach
<p>
    <a class="btn btn-secondary" href="/categories"><i class="general foundicon-monitor"> ВСЕ СООБЩЕНИЯ</i></a>
</p>
