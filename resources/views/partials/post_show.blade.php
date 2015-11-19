<div class="divPanel page-content">
    <div class="row-fluid">
        <div class=" main-post">
            <h3>{{ $forumpost->title }}</h3>
            <p>{{ $forumpost->body }}</p>
            @if ($forumpost->code != null)
                <div class="span11"><pre>{{ $forumpost->code }}</pre></div>
            @endif
            <div class="row-fluid">
                <div class="span11">
                    @if ($forumpost->pictures->count() > 0)
                        @foreach ($forumpost->pictures as $picture)
                            <span class="left-space">
                                <img src="{{ GlideImage::load($picture->name)->modify(['w' => 100]) }}"/>
                            </span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="toolbar-panel">
            <div class="row-fluid">
                <div class="pull-left">
                    <span class="label-default"><i class="icon-user"></i> {{ $forumpost->user->name }}</span>
                    <span class="right-space"></span>
                    <span class="label-default"><i class="icon-calendar"></i> {{ \Carbon\Carbon::parse($forumpost->updated_at)->format('d-m-y H:i') }}</span>
                    <!--span class="right-space"></span-->
                </div>
                <div class="pull-right">
                    <a class="btn btn-success btn-small" href="/post/{{$forumpost->id}}/edit">Редактировать</a>
                    <span class="right-space"></span>
                    <a class="btn btn-primary btn-small" href="/posts/create-next/{{ $forumpost->category_id }}/{{$forumpost->id}}">Комментировать</a>
                </div>
            </div>
        </div>
    </div>
</div>