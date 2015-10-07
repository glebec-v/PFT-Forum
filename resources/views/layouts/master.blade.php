<!doctype html>
<html lang="en">
<head>

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
    {!! Html::style ("/css/mystyle.css") !!}
    {!! Html::style ("/css/game.css") !!}

    <meta charset="UTF-8">
    <title>Forum</title>
</head>
<body>

@include('layouts._imageandweather')
@include('layouts._navmenu')
@include('layouts._bredcrampsandfind')

<div class="container" style="padding: 0px; ">
    <div class="col-lg-2 navbar-right clearfix" style="background-color: #f7ecb5; border-radius: 10px 10px 0px 0px">
        @section('profit_links')

            @if(Session::has('message'))
                <div class="alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif
            <h4 style="margin: 1px;">Ссылки:</h4>
            {!! link_to('http://pr-of-it.ru', $title = 'profIT', $attributes = [], $secure = null) !!}
            <br/>
            {!! link_to('http://laravel.com/docs/5.1', $title = 'Laravel docs', $attributes = [], $secure = null) !!}
        @show
    </div>

        @yield('content')
</div>
<footer class="footer">
<div class="footer">
    <p></p>
</div>
</footer>

<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! Html::script('http://code.jquery.com/jquery-1.11.3.min.js') !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script ("/js/ie10-viewport-bug-workaround.js") !!}
{!! Html::script ("/js/timer.js") !!}
        <!-- BEGIN JIVOSITE CODE {literal} -->
{!! Html::script ("/js/jivosite.js") !!}
        <!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
