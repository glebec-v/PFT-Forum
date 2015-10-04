@extends('layouts.master')
@section('content')

    <h2>Редактирование поста</h2>

    @include('partials.errors')

    {!! Form::open(['method' => 'put', 'route' => ['post.update', $forumpost->id], 'class' => 'form']) !!}
        <div class="form-group">
            {!! Form::label('Заголовок поста') !!}
            {!! Form::text('title', $forumpost->title, ['required', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Текст сообщения') !!}
            {!! Form::textarea('body', $forumpost->body, ['required', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Код') !!}
            {!! Form::textarea('code', $forumpost->code, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Внести изменения', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::open(['method' => 'delete', 'route' => ['post.destroy', $forumpost->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Удалить сообщение', ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@stop