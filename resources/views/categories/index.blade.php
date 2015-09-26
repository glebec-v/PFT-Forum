@extends('layouts.master')
@section('content')
    @if ($categories->count() > 0)
        <div class="col-lg-10 main"
             style="border-radius: 10px 10px 0px 0px; padding: 0px 0px 5px 0px; border-style: dotted;
             border-color: black; border-width: 1px">
            @foreach($categories as $category)
                   <div class="row" style="border-color: green; border-bottom: dotted; border-width: 1px;">
                       <div class="col-lg-8">
                    <h4 style="padding-left: 10px">
                        @if ($category->posts()->count() > 0)
                            {!! link_to('posts/thread/'.$category->id, $category->name) !!}
                        @else
                            {{ $category->name }}
                        @endif
                    </h4>
                       </div>
                    <div class="col-lg-1"
                         style="border-color: red; padding-bottom: 5px; border-radius: 5px; border-style: dotted; border-width: 1px">
                        <p> Здесь можно вывести </p>
                    </div>
                    <div class="col-lg-3"
                         style="border-color: red; padding-bottom: 5px; border-radius: 5px; border-style: dotted; border-width: 1px">
                        <p> Здесь можно вывести в и т.п.</p>
                    </div>
                   </div>
                <div class="clearfix"></div>
            @endforeach
            @else
                <p>Категории не найдены</p>
            @endif
        </div>
@stop