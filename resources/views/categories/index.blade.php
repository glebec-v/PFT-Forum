@extends('layouts.master')
@section('content')
    @if ($categories->count() > 0)
        <div class="col-lg-10 col-xs-10 col-md-10 col-sm-10 main">
            @foreach($categories as $category)
                <div class="row" style="border-radius: 10px 10px 0px 0px; padding: 5px 0px 5px 0px; border-style: dotted;
             border-color: #F7B10A; border-width: 1px">
                    <div class="col-lg-9 col-md-9 col-xs-9" style="padding-top: 2px">
                        <h4 style="padding-left: 10px; margin: 0px">
                            @if ($category->posts()->count() > 0)
                                {!! link_to('posts/thread/'.$category->id, $category->name) !!}
                            @else
                                {{ $category->name }}
                            @endif
                        </h4>
                        Тут хорошо бы выводить описание данной "ветки"
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs" style="padding-top: 2px">
                        <div class="list-group-item-heading">
                            <a href="#" class="list-group-item-text" title="Подтемы">
                                <span class="glyphicon glyphicon-tasks"></span> <span class="badge">5</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-xs col-sm-1" style="padding-top: 2px" title="Новые темы в разделе">
                        <div class="list-group-item-heading">
                            <a href="#" class="list-group-item-text center-block">
                                <span class="glyphicon glyphicon-envelope"></span> <span class="badge">10</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-xs col-sm-1" style="padding-top: 2px" title="Новые сообщения в разделе">
                        <div class="list-group-item-heading">
                            <a href="#" class="list-group-item-text center-block">
                                <span class="glyphicon glyphicon-send"></span>
                                <span class="badge">10</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <p>Категории не найдены</p>
            @endif
        </div>
        </div>
@stop