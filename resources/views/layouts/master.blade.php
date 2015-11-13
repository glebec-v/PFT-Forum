<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    {!! Html::style('css/app.css') !!}
    <title>Forum</title>
</head>
<body>
<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.html" id="divSiteTitle">Your Name Here</a><br />
                        <a href="index.html" id="divTagLine">Your Tag Line Here</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                        <div class="navbar">
                            <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                                NAVIGATION <span class="icon-chevron-down icon-white"></span>
                            </button>
                            <div class="nav-collapse collapse">
                                <ul class="nav nav-pills ddmenu">
                                    <li class="dropdown"><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="about.html">About</a></li>
                                    <li class="dropdown active">
                                        <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="full.html">Full Page</a></li>
                                            <li><a href="2-column.html">Two Column</a></li>
                                            <li><a href="3-column.html">Three Column</a></li>
                                            <li><a href="../documentation/index.html">Documentation</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="#">Dropdown Item</a></li>
                                                    <li><a href="#">Dropdown Item</a></li>
                                                    <li><a href="#">Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="gallery.html">Gallery</a></li>
                                    <li class="dropdown"><a href="contact.php">Contact</a></li>
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
            <div class="span8">
                @yield('content')
            </div>
            <div class="span4">
                @section('profit_links')
                    @if(Session::has('message'))
                        <div class="alert-info">
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
    {!! Html::script('js/all.js') !!}
</div>
</body>
</html>
