<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            Calleridmanagement
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/index.css') }}">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
<!-- Header Section Start -->
<header>
    <nav class="navbar ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/did' class="admin">DID Assignment </a></li>
                <li><a href='/dips' class="dips">Dip Report</a></li>
                <li><a href='/cnam' class="cnam">Check CNAM </a></li>
                <li><a href='/logout' class="cnam">Logout </a></li>

            </ul>
        </div>
    </nav>
</header>
<!-- //Header Section Start -->

<!-- Content -->
@yield('content')


<!-- Copy Right Section Start -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <p>© 2016 Omega Services, LLC. All rights reserved</p>
            </div>
            <!-- Icon Section Start -->
            <div class="pad_top10">
                <ul class="list-inline" id="icon_section">
                    <li>
                        <a href="https://www.facebook.com"> <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    
                    <li>
                        <a href="http://twitter.com"> <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- //Icon Section End -->        </div>
    </div>
</div>
<!-- //Copy Right Section End -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top fa fa-hand-o-up" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
</a>
<!-- global js start-->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/chandra.js') }}"></script>
<!-- //global js end -->
<!-- page level js -->
@yield('footer_scripts')
<!-- //page level js -->
</body>

</html>
