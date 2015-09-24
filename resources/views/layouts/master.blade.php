<!doctype html>
<html lang="en">
<head>

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
    {!! Html::style ("/css/mystyle.css") !!}

    <meta charset="UTF-8">
    <title>Forum</title>
</head>
<body>

@include('layouts._imageandweather')
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
