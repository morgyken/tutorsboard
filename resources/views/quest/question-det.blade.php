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
                            <p style="font-size: 25px"> <span class="label label-danger">  {{$assigned}}</span></p>
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

                    <hr>
                    @if ($assigned =='Assigned')
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal-ans">Answer Question</button>
                        </div>
                        <div class="col-md-3">
                            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#reply">Reply</button>
                        </div>
                        <div class="col-md-3">
                            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#message">Send Us a Message </button>
                        </div>

                        <div class="col-md-3">
                            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#message">Opt Out of Question </button>
                        </div>
                    @else
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Commit to Answer</button>
                        </div>

                        <div class="col-md-4">
                            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#reply">Reply</button>
                        </div>
                        <div class="col-md-4">
                            <button data-toggle="collapse" style="margin-right: 12px;" class="btn btn-primary btn-block" data-target="#message">Send Us a Message </button>
                        </div>
                    @endif



                @include('part.modal')

                @include('part.modal-ans')

                    <!-- Comments Form -->
                    <div class="card collapse my-4" id="reply">
                        <h5 class="card-header" style="margin-top: 20px;">Reply Student</h5>
                        <div class="card-body">
                            <form action="{{ route('post-comments', ['question_id' => $question['question_id']]) }}" method="POST">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <textarea class="form-control form-control input-lg" name="comment_body" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                        <hr>
                    </div>


                    <!-- Comments Form -->
                    <div class="card collapse my-4" id="message">
                        <h5 class="card-header">Send us a messge</h5>
                        <div class="card-body">
                            <form action="{{ route('post-comments1', ['question_id' => $question['question_id']]) }}" method="POST">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <textarea class="form-control form-control input-lg" name="comment_body" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                        <hr>
                    </div>

                    <!-- Single Comment -->

                    <div class="col-md-offset-1" style="margin-top:90px">
                      <img class="d-flex mr-3 col-md-2  rounded-circle" id="comm-pic" src="http://placehold.it/40x50" alt="">
                        <div class="col-md-10">
                            <h5>Commenter Name</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <hr>
               </div>

            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>