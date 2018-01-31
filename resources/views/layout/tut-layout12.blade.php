<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>My title</title>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" />

    

    <script type="text/javascript" src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>

    <link rel="shortcut icon" href="{{URL::asset('theme/assets/images/gt_favicon.png ') }}">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    
    <link href="{{URL::asset('/css/bootstrap1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('theme/assets/css/font-awesome.min.css ') }}">
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

@include('part.final-nav-bar')


<?php $user_id = Auth::User()->id;  ?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<div class="fb-profile">
    <a href="{{route('profile-pic-view', ['view' => 'background'])}}">
    <img align="left" class="fb2-image-lg" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/homepage/profile.jpg')}}" alt="Profile image example"/>    </a>
    
    <a href="{{route('profile-pic-view', ['view' => 'profile'])}}">
    <img align="left" class="fb-image-profile thumbnail" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="Click here to upload Background Picture"/>
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
@include('part.footer-final')