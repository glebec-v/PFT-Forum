@extends('layouts.master')
@section('content')
    <h2>Разделы форума:</h2>
    @if ($categories->count() > 0)
        <ul>
            @foreach($categories as $category)
                <li>
                    @if ($category->posts()->count() > 0)
                        {!! link_to('posts/thread/'.$category->id, $category->name) !!}
                    @else
                        {{ $category->name }}
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p>Категории не найдены</p>
    @endif
@stop