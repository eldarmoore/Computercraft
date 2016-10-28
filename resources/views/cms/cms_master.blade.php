<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Computercraft Admin Panel</title>
        <script> var BASE_URL = "{{ url('') }}/";</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('lib/summernote-master/dist/summernote.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('cms/dashboard') }}">Computercraft Admin Panel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a target="_blank" href="https://www.google.com/analytics/">Google analytics</a></li>
                    <li><a href="{{ url('') }}">Back to site</a></li>
                    <li><a href="{{ url('user/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        @if($errors->any()) @include('includes.errors') @endif
        @if( Session::has('sm')) @include('includes.sm') @endif
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="{{ url('cms/dashboard') }}"><span class="glyphicon glyphicon-th-large"></span> Dashboard</a></li>
                    <li><a href="{{ url('cms/menu') }}"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu</a></li>
                    <li><a href="{{ url('cms/content') }}"><span class=" glyphicon glyphicon-file"></span> Content</a></li>
                    <li><a href="{{ url('cms/categories') }}"><span class="glyphicon glyphicon-list-alt"></span> Categories</a></li>
                    <li><a href="{{ url('cms/products') }}"><span class="glyphicon glyphicon-apple"></span> Products</a></li>
                    <li><a href="{{ url('cms/orders') }}"><span class="glyphicon glyphicon-inbox"></span> Orders</a></li>
                </ul>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                @yield('cms_content')
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <script type="text/javascript" src="{{ asset('lib/jquery/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/summernote-master/dist/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    </body>
</html>