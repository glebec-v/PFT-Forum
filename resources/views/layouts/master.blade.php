<!doctype html>
<html lang="en">
<head>

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}

    <meta charset="UTF-8">
    <title>Forum</title>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #F7B10A  ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">PFT-Forum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="#">Форумы</a></li>
                <li><a href="#">Новости</a></li>
            </ul>
            <a href="#" class="navbar-right">
                <button class="btn btn-default btn-sm navbar-btn">Войти</button>
            </a>
            <p class="navbar-text navbar-right" style="padding-right: 10px;">Здравствуйте, ник!</p>
        </div>
    </div>
</nav>

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
{!! Html::script ("resources/assets/js/ie10-viewport-bug-workaround.js") !!}

</body>
</html>
