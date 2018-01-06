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
</head><link href="{{URL::asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
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


</style>

<?php $user_id = Auth::User()->id;  ?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<div class="fb-profile">
    <a href="{{URL::to('/profile-pic-view')}}">
    <img align="left" class="fb2-image-lg" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/homepage/profile.jpg')}}" alt="Profile image example"/>
    </a>
    
    <a href="{{URL::to('/profile-pic-view')}}">
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
    </div>;;
</div>

<div class="container">

    <div class="col-md-3">
        @include('part.vertical-menu1')

    </div>
    <div class="clearfix col-md-9" style="background:#FAFAD2">

        @yield('body')

    </div>
</div>
@include('part.footer-final')

