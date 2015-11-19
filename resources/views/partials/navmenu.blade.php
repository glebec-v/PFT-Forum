<li class="dropdown active">
    <a href="/categories/" class="dropdown-toggle">Разделы <b class="caret"></b></a>
    <ul class="dropdown-menu">
        @foreach( $categories as $category)
            <li>
                @if ($category->posts()->count() > 0)
                    {!! link_to('posts/thread/'.$category->id, $category->name) !!}
                @endif
            </li>
        @endforeach
    </ul>
</li>