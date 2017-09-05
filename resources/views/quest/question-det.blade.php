<style>
    #reply, #message, #commit{
        padding-top: 12px;
        margin-top:20px;
    }
    #comm-pic{
        max-height: 80px;
        max-width: 100px;
    }
</style>

@extends('layout.main-layout')

@section('content')

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.blade.php">Home</a></li>
            <li class="active">Registration</li>
        </ol>

        <div class="row clearfix">

            <!-- Article main content -->
            <article class="col-xl-12 maincontent">

                <header class="page-header">
                    <p><h1 style="margin-bottom:18px;" class="page-title">Question Details</h1></p>

                </header>
                <div class="col-lg-12">
                    <div class="col-lg-3" ><h4></h4></div>
                    <div class="col-lg-3" ><h5>Category: {{$question->category}}</h5></div>
                    <div class="col-lg-3" ><h5>Time left: {!! $difference !!} </h5></div>
                    <div class="col-lg-3" ><h5>Price: Ksh{!! $price !!}</h5></div>
                </div>
                <hr>

                <div class="col-lg-3">

                    @include('part.vertical-menu1')

                </div>

                <div class="col-lg-9">


                    <hr>
                <?php
                $date=date_create($posted);
                $fdate = date_format($date,"F j, Y, g:i A");
                ?>

                <!-- Date/Time -->
                    <div class="well well-lg clearfix">

                        <span class="">Posted on {{ $fdate }}  </span>

                        <span style="float: right;" >
                            <p style="font-size: 25px"> <span class="label label-danger"> 
                                    @if($assigned->status)
                                    
                                       {{ $assigned->status}}
                                        
                                     @else
                                       New
                                     @endif                                   
                                </span></p>
                        </span>

                    </div>


                    <hr>

                    <div class="col-lg-2">
                        <!-- Preview Image -->
                        <img width="130" height="150" class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

                        <hr>
                    </div>


                    <h6> <span style="font-weight:800; color:#ff981b;">{{ ucfirst(strstr($question->user_id, '@', true)) }}

                        </span> Posted a Question </h6>
                    <hr>
                    <!-- Post Content -->
                    {!! $question->question_body !!}
                    <blockquote class="blockquote">

                        {!! $question->summary !!}}
                    </blockquote>

                    <blockquote class="blockquote">

                        <h4> Available Files </h4>
                    
                        @foreach($files as $file)
                        
                            <p><a href="{{route('file-download',
                                    [
                                        'question_id' =>$question['question_id'],
                                        'filename'=>$file['basename'],
                                        'type' =>'answer'
                                     ])}}"
                                ><i class="icon-download-alt">{{$file['basename'] }}</a>   </p>
                        @endforeach

                    </blockquote>
                    

                    <hr>
                   
                    
                @include('part.user-links')
                

                @include('modals.modals-all')
                               
                    
                 @include('modals.comments-add')

                    <!-- Single Comment -->



                    @foreach($comments as $comment =>$val )
                            <div class="col-md-12" style="margin-top:12px">
                                <img class="d-flex mr-3 col-md-2  rounded-circle" id="comm-pic" src="http://placehold.it/40x50" alt="">
                                <div class="col-md-10">
                                    <h5>Coment Header </h5> <p> {{$val->comment_body}} </p>
                                </div>
                            </div>

                    @endforeach



                     <hr>
               </div>

            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>