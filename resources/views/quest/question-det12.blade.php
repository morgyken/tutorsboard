@extends('layout.tut-layout1')

@section('title')

Available Questions 

@endsection

@section('body')
    <article class="col-xl-12 maincontent">

            <div class="col-lg-3">
            @if(Auth::user()->user_role == 'admin')

            @include('part.admin-menu')

            @else

             @include('part.tutor-menu')

            @endif

        </div>

        <div class="col-lg-9 clearfix">
          
        <?php
        $date=date_create($posted);
        $fdate = date_format($date,"F j, Y, g:i A");
        ?>

        <!-- Date/Time -->
            <header class="page-header">
            <p><h2 style="margin-bottom:18px;" class="page-title">Question Details</h2></p>
            </header>
            <div class="well well-lg clearfix">
               
            <div class="row col-md-12">              
                
                <div class="col-md-4" >
                    <p>Category: {{$question->category}}</p>
                </div>
                <div class="col-md-5" >
                    <p>Time left: {!! $difference !!} </p>
                </div>
               
                <div class="col-md-3">
                    @if(Auth::user()->user_role=='admin')
                     <p> Cutomer Price: ${!! $price !!}</p>
                    @endif
                 </div>
           
                <div class="col-md-6" >
                    <span >
                        <p >
                            @if(Auth::user()->user_role == 'admin')
                            Tutor Price:
                            @else
                            Price:
                            @endif
                             Ksh{{$question_price->tutor_price }}  
                         </p>
                    </span>
                </div>
            </div>

        <div class="row col-md-12">
               

                <span class="">Posted on {{ $fdate }}  </span>


                <div style="float: right;" class="row" >
                            <p style="font-size: 25px"> <span class="label label-danger">

                                @if($status->disputed ==1)
                                
                                    Disputed 

                              
                                @endif
                                  @if($status->paid ==1)                                
                                    
                                    Paid

                                @endif
                                 @if($status->revision ==1)

                                    Revision

                                @endif

                                 @if($status->cancelled ==1)
                                    Cancelled

                                @endif
                                 @if($status->rated ==1)
                                    Rated
                            
                                @endif



                                 @if($status->assigned ==1)

                                    Assigned

                                 @endif

                                  @if($status->completed ==1)
                                    Completed

                                 @endif
                                  @if($status->overdue ==1)
                                    Overdue

                                 @endif
                                  @if($status->current ==1)

                                    Current

                                 @endif
                                @if($status->reassigned==1)

                                    Reassigned
                                 @endif

                                  @if($status->answered==1)

                                    Answered
                                 @endif




                                </span></p>
                        </div>

            </div>

        </div>


            <hr>

            <div class="col-lg-2">
                <?php 
               $user_id =  \App\Http\Controllers\UserController::CustomerId($question->question_id, 'question_bodies');

               $comment_user =  \App\Http\Controllers\UserController::CustomerId($question->question_id, 'post_comments');

               $answer_poster = \App\Http\Controllers\UserController::CustomerId($question->question_id, 'post_answers');

                 ?>
                <img class="img-fluid rounded image-profile" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}">
                 <hr>
            </div>


            <h4> <span style="font-weight:800; color:#ff981b;">{{ ucfirst(strstr($question->user_id1, '@', true)) }}

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
             
                @if(Auth::user()->user_role === 'tutor')
                <hr>
                   @include('part.user-links')
                @endif

                 @if(Auth::user()->user_role === 'admin')
                  <hr>
                   @include('part.admin-links')
                @endif

                <hr>

           
            
            @include('modals.modals-all')

            @include('modals.comments-add')


        <!-- Single Comment -->

            @foreach($comments as $comment =>$val )
                <div class="col-md-12" style="margin-top:12px;">
                    <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="">
                    <div class="col-md-10">

                        <h5>Created at: {{$val->created_at}}</h5><p> {{$val->comment_body}} </p>

                        <?php $filescomm = \App\Http\Controllers\QuestionController::CommentFiles($val->comments_id, $question['question_id']);


                        ?>
                        <div style="background:#fef9e7 ; padding: 10px; border-radius: 12px">
                            <h3 style="font-size: 17px;"> Comment Attachments</h3>


                            @foreach($filescomm as $file23)

                                <p style="font-size:12px; "><a href="{{route('comment-files',
                                    ['question_id' =>$question['question_id'],
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

            @if( $status->current ==1 )
                <p> The Question is currently openned to all Tutors </p>
            @elseif($status->completed ==1)
                <p> The Question has been Answered and Is now complete</p>

            @elseif($status->cancelled ==1)
                <p> This Question has been cancelled</p>
            @elseif($status->revision ==1)
                <p> The Question is under revision</p>


               
            @elseif($status->answered ==1)
                @if(Auth::user()->user_role != 'tutor')

                @foreach($answer as $ans =>$val )
                <blockquote class="blockquote" style="padding: 16px; border-top: 23px;">

                    <div class="col-md-12" style="margin-top:12px; background:#EEE8AA; border-radius: 8px;">
                        <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('/storage/uploads/profile/'.$answer_poster.'/profile/profile.jpg')}}" alt="">
                        <div class="col-md-10">
                        <h5>Created at: {{$val->created_at}}</h5><p> {{$val->answer_body}} </p>      
                        <div style="background:#fef9e7 ; padding: 10px; border-radius: 12px">
                            <h3 style="font-size: 17px;"> Answer Attachment</h3>

            

                            @foreach($answer_files as $file)

                                <p style="font-size: 14px"><a href="{{route('file-download',
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
     
                @endforeach

                @else
                <p> This Queston has been answered </p>
                @endif

                @endif

                @if(Auth::user()->user_role == 'admin')

                 @include('part.admin-question-links')
                 @endif     

                 @if(Auth::user()->user_role == 'customer')

                 @include('part.cust-links')
                 @endif       
               
             


        </div>

    </article>
    <!-- /Article -->

@endsection
<!-- /Article -->