@extends('layouts.master')
@section('content')
    <div class="divPanel page-content">
        <div class="row-fluid">
            <div class="span10">
                <h3>{{ $forumpost->title }}</h3>
                <p>{{ $forumpost->body }}</p>
                <span>Code:</span>
                <pre>{{ $forumpost->code }}</pre>
                <hr/>
                @if ($forumpost->pictures->count() > 0)
                    @foreach ($forumpost->pictures as $picture)
                        <img src="{{ GlideImage::load($picture->name)->modify(['w' => 100]) }}"/>
                    @endforeach
                @endif
            </div>
            <div class="span2">
                <div class="line-separator"></div>
                <p><i class="icon-user"></i> {{ $forumpost->user->name }}</p>
                <p><i class="icon-calendar"></i> {{ \Carbon\Carbon::parse($forumpost->updated_at)->format('d-m-y H:i') }}</p>
                <p><a class="btn btn-success btn-small" href="/post/{{$forumpost->id}}/edit">Редактировать</a></p>
                <p><a class="btn btn-primary btn-small" href="/posts/create-next/{{ $forumpost->category_id }}/{{$forumpost->id}}">Комментировать</a></p>
            </div>
        </div>
    </div>
@stop

@section('profit_links')
    @parent
@endsection