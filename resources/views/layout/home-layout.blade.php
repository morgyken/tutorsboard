<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Progressus - Free business bootstrap template by GetTemplate</title>

    <link rel="shortcut icon" href="{{URL::asset('theme/assets/images/gt_favicon.png ') }}">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/bootstrap.min.css ') }}">
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/font-awesome.min.css ') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/bootstrap-theme.css ') }}" media="screen" >
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/main.css') }}">

     <link rel="stylesheet" href="{{URL::asset('/css/app.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('theme/assets/js/html5shiv.js') }}"></script>

    <style type="text/css">
        body { display: none; }
    </style>
    <script>
        document.documentElement.className += ' js';
    </script>
    <![endif]-->
</head>


<body>
<body class="home">
<!-- Fixed navbar -->
    @include('part.final-nav-bar')


    <div class="row">

        <!-- Article main content -->
        <article class="col-lg-12 col-xl-12 maincontent">

            @yield('content')

        </article>
        <!-- /Article -->

    </div>



@include ('part.footer-final')
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

</body>
</html>