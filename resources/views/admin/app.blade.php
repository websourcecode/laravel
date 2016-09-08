<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            Calleridmanagement
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom_css/chandra.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/metisMenu.css') }}"  rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom_css/panel.css') }}" rel="stylesheet" type="text/css" />
    <style>
    body > .header .navbar{
        height: 64px;
    }

    </style>
    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>
<body class="skin-chandra">
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="/" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               <img src="{{ asset('/images/logo.png') }}">
            </a>
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-hand-o-left"></i>
                </a>
            </div>

        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    
                    <ul class="navigation" style="margin-top:20px;;">
                        <li class="active1">
                            <a href="/admin">
                                <i class="menu-icon fa fa-user"></i>
                                <span class="mm-text ">Customer Info</span>
                            </a>
                        </li>
                        <li class="active2">
                            <a href="/modify_customer">
                                <i class="menu-icon fa fa-pencil-square-o"></i>
                                <span class="mm-text ">Modify Customer</span>
                            </a>
                        </li>
                        <li class="active3">
                            <a href="/new_customer">
                                <i class="menu-icon fa fa-plus"></i>
                                <span class="mm-text "> Add Customer</span>
                            </a>
                        </li>
                        <li class="active4">
                            <a href="/logout">
                                <i class="menu-icon fa fa-sign-out"></i>
                                <span class="mm-text "> Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side right-padding">

            <!-- Notifications -->

            <!-- Content -->
            @yield('content')

            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    @if (Request::is('admin/draggable_portlets'))
        <script src="{{ asset('assets/js/custom_js/jquery.ui.min.js') }}" type="text/javascript"></script>
    @endif
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custom_js/rightside_bar.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>
</html>
