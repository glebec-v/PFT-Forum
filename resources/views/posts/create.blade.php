@extends('layouts.master')
@section('content')

    <h2>Создание нового поста</h2>

    @include('partials.errors')

    {!! Form::open(['route' => 'post.store', 'class' => 'form']) !!}

    <div class="form-group">
        {!! Form::label('Заголовок поста') !!}
        {!! Form::text('name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Заголовок']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Текст сообщения') !!}
        {!! Form::textarea('name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Сообщение']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Код') !!}
        {!! Form::textarea('name', null, ['class' => 'form-control', 'placeholder' => 'Сообщение']) !!}
    </div>

    <h3>Выберите категорию</h3>
    <div class="form-group">
        {!! Form::label('Категории') !!}
        {!! Form::select('category', $category, null, ['name' => 'category']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Запостить', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop