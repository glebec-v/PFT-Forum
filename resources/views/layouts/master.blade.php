<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    {!! Html::style('css/app.css') !!}
    {!! Html::style('http://fonts.googleapis.com/css?family=Abel') !!}
    <title>Forum</title>
</head>
<body>
<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="/" id="divSiteTitle">Форум</a><br />
                        <a href="/post/create" id="divTagLine">Поделись своими мыслями!</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                        <div class="navbar">
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                                NAVIGATION <span class="icon-chevron-down icon-white"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                <ul class="nav nav-pills ddmenu">
                                    <li class="dropdown"><a href="/">Главная</a></li>
                                    @include('partials.navmenu')
                                    @include('partials.navauth')
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>
<div class="container">
    <div class="divPanel page-content">
        <div class="row-fluid">
            <div class="span10">
                @yield('content')
            </div>
            <div class="span2">
                @section('profit_links')
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <div class="panel-info">
                            <i class="icon-user"></i>
                            <span class="right-space"></span>
                            <span class="label-default">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <div class="alert-danger">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <h2>Ссылки:</h2>
                    {!! link_to('http://pr-of-it.ru', $title = 'profIT', $attributes = array(), $secure = null) !!}
                    <br/>
                    {!! link_to('http://laravel.com/docs/5.1', $title = 'Laravel docs', $attributes = array(), $secure = null) !!}
                @show
            </div>
        </div>
    </div>
    <div id="footerOuterSeparator"></div>
    @include('partials.footer')
    {!! Html::script('js/all.js') !!}
</div>
</body>
</html>
