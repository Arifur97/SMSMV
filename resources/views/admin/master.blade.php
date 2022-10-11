<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/') }}admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/') }}admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/') }}admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home')  }}">Admin Panel</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu" style="margin-top: 30px">
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Country<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.country') }}">Add Country</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.country') }}">Manage Country</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> SMS Operator<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.operator') }}">Add Operator</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.operator') }}">Manage Operator</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Home Slider<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.slider') }}">Add Slider</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.slider') }}">Manage Slider</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Services<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.service.title') }}">Service Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.service') }}">Add Service</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.service') }}">Manage Service</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Why Choose<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.choose.title') }}">Choose Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.choose') }}">Add Choose</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.choose') }}">Manage Choose</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Our Clients Love<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.client.title') }}">Client Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.client') }}">Add Client</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.client') }}">Manage Client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> About Us<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature.bg') }}">Feature BG</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature') }}">Add Feature</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.feature') }}">Manage Feature</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Developer API<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.developer.title') }}">Developer Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature.one.bg') }}">Add Feature One BG</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature.one') }}">Add Feature One</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.feature.one') }}">Manage Feature One</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature.two') }}">Add Feature Two</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.feature.two') }}">Manage Feature Two</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Terms & Condisions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.term.title') }}">Terms Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.term') }}">Add Terms</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.term') }}">Manage Term</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Support<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.support.title') }}">Support Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.support') }}">Add Support</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.support') }}">Manage Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Package Pricing<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('add.package.title') }}">Package Title</a>
                            </li>
                            <li>
                                <a href="{{ route('add.package') }}">Add Package Pricing</a>
                            </li>
                            <li>
                                <a href="{{ route('manage.package') }}">Manage Package Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('add.test.sms') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Test SMS</a>
                    </li>
                    <li>
                        <a href="{{ route('add.join') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Join SMS</a>
                    </li>
                    {{--</li>--}}
                    <li>
                        <a href="{{ route('add.footer') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Footer</a>
                    </li>
                    <li>
                        <a href="{{ route('add.contact') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')
    <!-- /#page-wrapper -->

</div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/') }}admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/') }}admin/vendor/raphael/raphael.min.js"></script>
<script src="{{ asset('/') }}admin/vendor/morrisjs/morris.min.js"></script>
<script src="{{ asset('/') }}admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/') }}admin/dist/js/sb-admin-2.js"></script>

CkEditor
<script src="{{ asset('/') }}admin/ckeditor/ckeditor.js"></script>
<script src="{{ asset('/') }}admin/ckeditor/samples/js/sample.js"></script>
<script>
    initSample();
</script>

</body>

</html>
