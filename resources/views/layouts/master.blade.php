<!doctype html>
<html lang="en">
<head>

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}

    <meta charset="UTF-8">
    <title>Forum</title>
</head>
<body>

<div class="container hidden-xs" >
    <div class="row" >
        <div class="col-lg-1 col-md-1 col-sm-2" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/freeimg.jpg"></div>
        <div class="col-lg-1 col-md-1 col-sm-2" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/jsimg.jpg"></div>
        <div class="col-lg-1 col-md-1 col-sm-2" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/linux2.jpg"></div>
        <div class="col-lg-1 col-md-1 col-sm-2" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/phpworld.png"></div>
        <div class="col-lg-1 col-md-1 col-sm-2" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/pgimg.jpg"></div>
        <div class="col-lg-1 col-md-1 hidden-sm" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/sqlite.jpg"></div>
        <div class="col-lg-1 col-md-1 hidden-sm" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/sisi.jpg"></div>
        <div class="col-lg-1 col-md-1 hidden-sm" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/freebsd.jpg"></div>
        <div class="col-lg-1 col-md-1 hidden-sm" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/node.jpg"></div>
        <div class="col-lg-1 col-md-1 hidden-sm" style="margin: 0px; padding: 0px align-content: center"><img src="../../images/composer.jpg"></div>

        <div id="weather" class="col-sm-2 col-md-2 col-lg-1" align="right" style="margin: 0px; padding: 0px">
            <a href="http://pogoda.yandex.ru/tambov/">{{$city}}</a>
            <img src="http://img.yandex.net/i/wiz{{$pic}}.png" alt={{$type}} title={{$type}}>
            <p>{{$temp}} <sup>o</sup>C</p>
        </div>
    </div>
</div>

@include('layouts._navmenu')

<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                @yield('content')
            </div>
            <div class="col-sm-2">@section('profit_links')
                    @if(Session::has('message'))
                        <div class="alert-info">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <h2>Ссылки:</h2>
                    {!! link_to('http://pr-of-it.ru', $title = 'profIT', $attributes = [], $secure = null) !!}
                    <br/>
                    {!! link_to('http://laravel.com/docs/5.1', $title = 'Laravel docs', $attributes = [], $secure = null) !!}
                @show
            </div>
        </div>
    </div>
</main>


<div class="container">
    <div class="col-md-10">
        @yield('content')
    </div>
    <div class="col-md-2">
        @section('profit_links')
            @if(Session::has('message'))
                <div class="alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
            <h2>Ссылки:</h2>
            {!! link_to('http://pr-of-it.ru', $title = 'profIT', $attributes = [], $secure = null) !!}
            <br/>
            {!! link_to('http://laravel.com/docs/5.1', $title = 'Laravel docs', $attributes = [], $secure = null) !!}
        @show
    </div>
</div>

<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! Html::script('http://code.jquery.com/jquery-1.11.3.min.js') !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script ("/js/ie10-viewport-bug-workaround.js") !!}

</body>
</html>
