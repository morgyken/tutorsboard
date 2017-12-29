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

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/bootstrap.min.css ') }}">

    <link href="{{URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/font-awesome.min.css ') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/bootstrap-theme.css ') }}" media="screen" >
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/main.css') }}">

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
<style>
    /* ==========================================================================
       Author's custom styles
       ========================================================================== */
    .fb-image-profile
    {
        margin: -90px 10px 0px 50px;
        z-index: 9;
        height: 180px;
        width: 150px;
        border-radius: 50%;
    }
    .image-profile
    {
        border-radius: 50%;
        border-color: #F0E68C;
        border-width: 2px;
        border-style: solid;
        height: 150px;
        width:210px;
    }
    .image-comment
    {
        border-radius: 50%;
        border-color: #F0E68C;
        border-width: 2px;
        border-style: solid;
    }
</style>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="contact.blade.php">Contact</a></li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<?php $user_id = Auth::User()->id;  ?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<div class="fb-profile">
    <a href="{{route('profile-pic-view')}}">
    <img align="left" class="fb2-image-lg" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/homepage/profile.jpg')}}" alt="Profile image example"/>
    </a>
    
    <a href="{{route('profile-pic-view')}}">
    <img align="left" class="fb-image-profile thumbnail" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="Profile image example"/>
    </a>
    <div class="fb-profile-text">
        <div class="col-dm-9">
            <h3>Name: {{Auth::User()->name}}</h3>
            <p> Tutor Since: <?php
                $date = new DateTime(Auth::User()->created_at);
                echo $date->format("l jS \of F Y");
                ?></p>
            <p>Answered {{$count}}</p>


        </div>
    </div>

</div> <!-- /container -->
<div class="container">
    <div class="well clearfix">
        <div class="col-sm-4"> <h4> Final Earning</h4>  </div>
        <div  class="col-sm-4"><h4>Total Earning </h4> </div>
        <div class="col-sm-4"> <h4>Other details </h4> </div>
    </div>


<div class="container">
    <div class="col-md-3">
        @include('part.tutor-menu')

    </div>
    <div class="col-md-9">


        @yield('body')

    </div>

</div>
</div>
@include('layout.footer')