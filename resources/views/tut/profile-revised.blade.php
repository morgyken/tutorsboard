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

    <div class="fb-profile">
        <img align="left" class="fb2-image-lg" src="{{URL::asset('admin/images/image.jpg')}}" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="http://lorempixel.com/180/180/people/9/" alt="Profile image example"/>
        <div class="fb-profile-text">
            <div class="col-dm-9">
                <h3>Name: {{$user->name}}</h3>
                <p> Tutor Since: <?php
                    $date = new DateTime($user->created_at);
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
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr>
                <th>Question Id</th>
                <th>Summary</th>

                <th>Total Amount </th>

                <th>Status</th>
                <th> Paid </th>


            </tr>
            </thead>
            <?php $array = array(); ?>

             @foreach( $comments as $quest=> $value)
            <tbody>


            <a href="#"> <tr class="odd gradeX" style="cursor: pointer">
                <?php  $array [] = $value->question_id  ?>
                <td> {{$value->question_id}} </td>
                <td> {!! substr( $value-> summary, 0, 100)!!}  </td>
                <td> {!! $value->question_price !!}</td>
                    <td> {{$value -> status}} </td>

                    @if($value->paid==1)
                        <td> Paid </td>

                    @else
                        <td>  </td>
                    @endif


            </tr>
            </a>

            @endforeach

            </tbody>
            </table>

            <h5>{{ $comments->links() }}</h5>
    </div>
</div>

<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+234 23 9873237<br>
                            <a href="mailto:#">some.email@somewhere.com</a><br>
                            <br>
                            234 Hidden Pond Road, Ashland City, TN 37015
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons clearfix">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">Text widget</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                        <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">Home</a> |
                            <a href="about.blade.php">About</a> |
                            <a href="sidebar-right.blade.php">Sidebar</a> |
                            <a href="contact.blade.php">Contact</a> |
                            <b><a href="signup.blade.php">Sign up</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>
</footer>




