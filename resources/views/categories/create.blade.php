@extends('layouts.master')
@section('content')

    <h2>Создание новой категории</h2>

    @include('partials.errors')

    {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

        <div class="form-group">
            {!! Form::label('Имя категории') !!}
            {!! Form::text('name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Новая категория']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Добавить категорию', ['class' => 'btn-success']) !!}
        </div>

    {!! Form::close() !!}

@stop