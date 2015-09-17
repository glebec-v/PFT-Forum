@extends('layouts.master')
@section('content')

    <h2>Создание нового поста</h2>

    @include('partials.errors')

    {!! Form::open(['route' => 'post.store', 'class' => 'form']) !!}

    <div class="form-group">
        {!! Form::label('Заголовок поста') !!}
        {!! Form::text('title', null, ['required', 'class' => 'form-control', 'placeholder' => 'Заголовок']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Текст сообщения') !!}
        {!! Form::textarea('body', null, ['required', 'class' => 'form-control', 'placeholder' => 'Сообщение']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Код') !!}
        {!! Form::textarea('code', null, ['class' => 'form-control', 'placeholder' => 'Code snippet']) !!}
    </div>

    @if (isset($forumpost->category->name))
        {!! Form::hidden('category_id', $forumpost->category->id) !!}
        {!! Form::hidden('parent_id', $forumpost->id) !!}
    @elseif (isset($category))
        {!! Form::hidden('category_id', $category->id) !!}
        {!! Form::hidden('parent_id', 0) !!}
    @else
        <h3>Выберите категорию</h3>
        <div class="form-group">
            {!! Form::label('Категории') !!}
            {!! Form::select('category_id', $category, null, ['name' => 'category_id']) !!}
        </div>
        {!! Form::hidden('parent_id', 0) !!}
    @endif
    {!! Form::hidden('child', false) !!}
    <!-- Temporary!!! --> {!! Form::hidden('user_id', 1) !!}

    <div class="form-group">
        {!! Form::submit('Запостить', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop