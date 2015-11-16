@foreach( $posts as $post)
    <p>
        <a href="/post/{{ $post->id }}">{{ $post->title }}</a><br />
        <span style="text-transform:none;"><i class="icon-calendar"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-y H:i') }}</span>
        <span style="text-transform:none;"><i class="icon-user"></i> {{ $post->user->name }}</span>
    </p>
@endforeach
<p>
    <a class="btn btn-secondary" href="/categories"><i class="general foundicon-monitor"> ВСЕ СООБЩЕНИЯ</i></a>
</p>
