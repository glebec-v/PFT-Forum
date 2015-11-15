<h2>{{ $forumpost->title }}</h2>
<p>{{ $forumpost->body }}</p>
<pre>{{ $forumpost->code }}</pre>
<hr/>
@if ($forumpost->pictures->count() > 0)
    @foreach ($forumpost->pictures as $picture)
        <img src="{{ GlideImage::load($picture->name)->modify(['w' => 100]) }}"/>
    @endforeach
@endif