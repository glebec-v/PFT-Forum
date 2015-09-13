@extends('layouts.master')
@section('content')

    <h2>Редактирование новой категории</h2>

    @include('partials.errors')

    {!! Form::model($category, ['method' => 'put', 'route' => ['categories.update', $category->id], 'class' => 'form']) !!}

    <div class="form-group">
        {!! Form::label('Категория') !!}
        {!! Form::text('name', null, ['required', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Изменить категорию', ['class' => 'btn-success']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
        <div class="form-group">
            {!! Form::submit('Удалить категорию', ['class' => 'btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@stop