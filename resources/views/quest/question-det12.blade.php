@extends('layout.tut-layout1')

@section('body')
    <article class="col-xl-12 maincontent">

        <header class="page-header">
            <p><h2 style="margin-bottom:18px;" class="page-title">Question Details</h2></p>

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

                                       {{ $assigned->status}}


                                </span></p>
                        </span>

            </div>

            <hr>

            <div class="col-lg-2">
                <!-- Preview Image -->
                <img class="img-fluid rounded image-profile" src="{{URL::asset('http://lorempixel.com/180/180/people/9/')}}" alt="">

                <hr>
            </div>


            <h4> <span style="font-weight:800; color:#ff981b;">{{ ucfirst(strstr($question->user_id, '@', true)) }}

                        </span> Posted a Question </h4>
            <hr>
            <!-- Post Content -->
            {!! $question->question_body !!}
            <blockquote class="blockquote">

                {!! $question->summary !!}}
            </blockquote>

            <blockquote class="blockquote">

                <h4> Question attachments</h4>

                @foreach($files as $file)

                    <p><a href="{{route('file-download',
                                    [
                                        'question_id' =>$question['question_id'],
                                        'filename'=>$file['basename'],
                                        'type' =>'question'
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
                <div class="col-md-12" style="margin-top:12px;">
                    <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('http://lorempixel.com/180/180/people/9/')}}" alt="">
                    <div class="col-md-10">

                        <h5>Created at: {{$val->created_at}}</h5><p> {{$val->comment_body}} </p>



                        <?php $filescomm = \App\Http\Controllers\QuestionController::CommentFiles($val->comments_id, $question['question_id']);


                        ?>
                        <div style="background:#fef9e7 ; padding: 10px; border-radius: 12px">
                            <h3 style="font-size: 17px;"> Comment Attachments</h3>


                            @foreach($filescomm as $file23)

                                <p style="font-size:12px; "><a href="{{route('comment-files',
                                    [
                                        'question_id' =>$question['question_id'],
                                        'filename'=>$file23['basename'],
                                        'comment_id' =>$val->comments_id
                                     ])}}"
                                    ><i class="icon-download-alt">{{$file23['basename'] }}</a>   </p>
                            @endforeach

                        </div>

                    </div>
                </div>

            @endforeach



            <hr>

            <blockquote class="blockquote" style="padding: 16px; border-top: 23px;">

                <div class="col-md-12" style="margin-top:12px; background:#EEE8AA; border-radius: 8px;">
                    <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('http://lorempixel.com/180/180/people/9/')}}" alt="">
                    <div class="col-md-10">

                        <h4> {{$val->user_id}} Answered the Question</h4>


                        <h5>Created at: {{$val->created_at}}</h5><p style="background: #fff;padding: 12px;"> {{$val->comment_body}} </p>

                <h4> Answer  Attachments</h4>

                @foreach($answer_files as $file)

                    <p style="font-size: 12px"><a href="{{route('file-download',
                                    [
                                        'question_id' =>$question['question_id'],
                                        'filename'=>$file['basename'],
                                        'type' =>'answer'
                                     ])}}"
                        ><i class="icon-download-alt">{{$file['basename'] }}</a>   </p>
                @endforeach

                    </div>
                </div>

            </blockquote>
        </div>

    </article>
    <!-- /Article -->

@endsection
<!-- /Article -->