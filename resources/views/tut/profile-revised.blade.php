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

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<?php $user_id = Auth::User()->id;  ?>

    <div class="fb-profile">
        <img align="left" class="fb2-image-lg" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/homepage/profile.jpg')}}" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="Profile image example"/>
        <div class="fb-profile-text">
            <div class="col-dm-9">
                <h3>Name: {{Auth::user()->name}}</h3>
                <p> Tutor Since: <?php
                    $date = new DateTime(Auth::user()->created_at);
                    echo $date->format("l jS \of F Y");

                    ?></p>
                <p>Answered {{$count}}</p>


            </div>
        </div>
        <?php

            $myarray = array();
            foreach($comments as $comm=> $val){

                $myarray [] = $val->question_id;
            }    //  dd($myarray);

        ?>
        {{ Session::put('questions', $myarray) }}

</div> <!-- /container -->
<div class="container">
    <div class="well clearfix">

        <div class="col-sm-4"> <h4>Total Earnings <span class="label label-default">Ksh {{ $sum_2 }}</span> </h4>  </div>

        <div class="col-sm-4"> <h4>Available Earnings  <span class="label label-default">Ksh {{ $sum }}</span> </h4>  </div>

        <div class="col-sm-4"> <a href="{{ route('post-payment-request',
                            ['amount'=> $sum ]) }}"
                                  class="btn btn-warning">Request Withdrawal </a>  </div>
    </div>
</div>

<div class="container">

    <div class="col-md-3">
    @include('part.tut-nav-bar')

    </div>
    <div class="clearfix col-md-9">

        <article class="col-md-9 maincontent">
            <header class="page-header">
                <h1 class="page-title"> Available Questions</h1>
            </header>

            <div class="clearfix">
                <div class="col-md-10">
                    <h4>Question Detail  </h4>
                </div>
                <div class="col-md-2">
                    <h4> Other Details</h4>
                </div>

            </div>
            <hr>
            @foreach($question as $quest=>$value)



                <?php  $array_of_deadline = getDeadlineInSeconds1($value->question_deadline);

                $deadline12 = getDeadlineInSeconds12($value->question_deadline);

                ?>


                <div class="question">

                    <a href="{{URL::to('/view-question/'.$value->question_id)}}">
                        <div class="clearfix quest">
                            <div class="col-md-10" style="color:#333">

                                <h4>{{$value->category}}</h4>
                                <p>{{ $value->summary  }}  </p>
                            </div>
                            <div class="col-md-2">



                                <h4 style="padding-bottom:20px;">
                            <span class="label label-danger label-lg ">
                                {{ $array_of_deadline }}
                            </span>  </h4>
                                <h4> <span class="label label-warning ">Ksh: {{$value->question_price}}</span></h4>
                            </div>


                        </div>
                    </a>
                </div>
            
                <hr>


            @endforeach
            <h5>{{ $question->links() }}</h5>



        </article>
        <!-- /Article -->
            <h5>{{ $comments->links() }}</h5>
    </div>
</div>

@include('part.footer')