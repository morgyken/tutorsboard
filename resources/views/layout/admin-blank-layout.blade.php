<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>
<script src="https://momentjs.com/downloads/moment.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> 
    

        <!-- MetisMenu CSS -->
    <link href="{{URL::asset('admin/vendor/metisMenu/metisMenu.min.css')}}'" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->

    <script type="text/javascript" src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <link href="{{URL::asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

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
    @include('part.final-nav-bar')
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                @include('part.admin-menu')
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('pagename')</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{URL::asset('admin/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}'"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{URL::asset('admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{URL::asset('admin/vendor/raphael/raphael.min.js')}}'"></script>
<script src="{{URL::asset('admin/vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{URL::asset('admin/data/morris-data.js')}}'"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('admin/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
