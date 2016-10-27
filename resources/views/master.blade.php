<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <script> var BASE_URL = "{{ url('') }}/";</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

    <header>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('images/logo.svg') }}" alt="" height="20"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column" style="width: <?php

                                    $count = 0;

                                    foreach ($categories as $cat){
                                        if($cat['sub_category'] == 0){
                                            if($count < 7){
                                                ++$count;
                                            }
                                        }
                                    }

                                    echo 120 * $count;

                            ?>px">

                                @foreach($categories as $row)

                                    @unless($row['sub_category'])

                                            <div class="col-sm-12" style="width: 120px">
                                                <div class="row">
                                                    <ul class="multi-column-dropdown">

                                                    <li class="text-uppercase"><a href="{{ url('shop/' . $row['url']) }}"><b>{{ $row['title'] }}</b></a></li>
                                                    {{--<li class="divider"></li>--}}
                                                    @foreach($categories as $sub_row)
                                                        @if($sub_row['sub_category'] == $row['id'])
                                                            <li><a href="{{ url('shop/' . $row['url']) . '/' . $sub_row['url'] }}">- {{ $sub_row['title']}}</a></li>
                                                        @endif
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                    @endunless

                                @endforeach

                            </ul>
                        </li>
                        @if($menu)
                            @foreach($menu as $item)
                                <li><a href="{{ url($item['url']) }}">{{ $item['link'] }}</a></li>
                            @endforeach
                        @endif

                        @if($total_cart = Cart::getTotalQuantity() )
                        <li><a class="glyphicon glyphicon-shopping-cart" href="{{ url('shop/checkout') }}"><div class="total-cart">{{ $total_cart }}</div></a></li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        @if( !Session::has('user_id') )
                            <li><a href="{{ url('user/signin') }}">Sign in</a></li>
                            <li><a href="{{ url('user/signup') }}">Sign up</a></li>
                        @else
                            <li><a href="{{ url('user/profile') }}">Welcome, {{ Session::get('user_name') }}</a></li>
                            @if(Session::has('is_admin'))
                                <li><a href="{{ url('cms/dashboard') }}">CMS DASHBOARD</a></li>
                            @endif
                            <li><a href="{{ url('user/logout') }}">Logout</a></li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            @if($errors->any()) @include('includes.errors') @endif
            @if( Session::has('sm')) @include('includes.sm') @endif
        </nav>

    </header>

    @yield('slider')

    <br><br><br>

    <div class="container">

        <!-- Content -->
        @yield('content')

    </div>

    <hr>

    <div class="container">
        <!-- Footer -->
        <footer>
            <div class="row foot">
                <div class="col-md-12">
                    <p class="text-center">Copyright &copy; Computercraft {{ date('Y') }}</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


        <script type="text/javascript" src="{{ asset('lib/jquery/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </body>
</html>