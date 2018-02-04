<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  <title> Home-Assign: Question Details</title>

  <link rel="stylesheet" href=" {{ URL::asset('/theme1/includes/iclude1/assets/tether/tether.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/bootstrap/css/bootstrap-grid.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/bootstrap/css/bootstrap-reboot.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/theme/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/mobirise/css/mbr-additional.css')}}" type="text/css">
  



<link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/web/assets/mobirise-icons/mobirise-icons.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap-grid.min.css ')}}">
   <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap-reboot.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/dropdown/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/theme/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/mobirise/css/mbr-additional.css ')}}" type="text/css">



  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/tether/tether.min.class')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/bootstrap/css/bootstrap-grid.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/bootstrap/css/bootstrap-reboot.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/theme/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/sample/assets/mobirise/css/mbr-additional.css ')}}" type="text/css">

  
</head>

<body>

  <section class="menu cid-qI9L0sV3Ag" once="menu" id="menu2-d">   

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                        <img src="{{ URL::asset('/theme1/favi.png ')}}" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.com">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.com">
                        About Us
                    </a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="tel:+1-234-567-8901">
                    <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
                    </span>
                    +1-234-567-8901
                </a>
            </div>
        </div>
    </nav>
</section>
  

<section class="engine"><a href="https://mobirise.ws/q">website creator download</a></section><section class="testimonials5 cid-qI9OEX4Gjg" id="testimonials5-h">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">User Details&nbsp;</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">


                {{ Auth::User()->name}} has been Tutoring since
                    <?php
                      $date = new DateTime(Auth::User()->created_at);
                      echo $date->format("l jS \of F Y");
                ?>

                    <?php
                    $date=date_create($posted);
                    $fdate = date_format($date,"F j, Y, g:i A");
                    ?>

                </h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="media-container-column">
          <?php $user_id = Auth::User()->id;  ?>            
        <div class="mbr-testimonial align-center col-12 col-md-12">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <a href="{{route('profile-pic-view', ['view' => 'profile'])}}">
                                <img align="left" class="fb-image-profile thumbnail" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="Click here to upload Background Picture"/>
                                </a>
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-7">
                             {{ Auth::User()->name}}
                        </div>
                      <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                          {{ Auth::User()->user_role }}

                           <p>Answered <span class="badge"> {{ \App\Http\Controllers\QuestionController::questionStat('answered') }}</span>
                           </p>
                        </small>
                    </div>
                </div>
            </div>
    </div>   
</section>

<section class="mbr-section content4 cid-qI9IJ9MpuF" id="content4-4">    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">Question Details</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">

              <div class="row col-md-12">              
                
                <div class="col-md-3" >
                    <p>Category: {{$question->category}}</p>
                </div>
                <div class="col-md-3" >
             
                    <p>Time left: {!! $difference !!} </p>
                
                </div>
               @if(Auth::user()->user_role=='admin')
                <div class="col-md-3">                    
                     <p> Cutomer Price: ${!! $price !!}</p>
                   
                 </div>
                  @endif
           
                <div class="col-md-3" >
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
                <div class="col-md-3">
                  
                  <span>Posted on {{ $fdate }}  </span>
                </div>
            </div>


                </p></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="cid-qItTrDVKNt" id="pricing-tables1-o">

    
    <div class="container">
        <div class="media-container-row">

            <div class="plan mx-2 my-2 justify-content-center col-lg-3">
                <li class="list-group-item col-md-12">
                
                    <div class="col-md-12" style="padding: 2px; margin-left: 0;">
                    @if(Auth::user()->user_role == 'admin')

                    @include('part.admin-menu')

                    @else

                     @include('part.tutor-menu')

                    @endif
                
           
            </div>
        </li>
            </div>

            <div class=" mx-2 my-2 justify-content-center col-lg-9" style="padding-left: 20px;">
                
                <div class="plan-body pb-5">
                    <div class="plan-list align-left">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                           
                            <li class="list-group-item col-lg-10 col-md-11" style="padding-left: 40px; padding-top: 40px;">
               

                            <div class="col-lg-3">
                                <?php 
                               $user_id =  \App\Http\Controllers\UserController::CustomerId($question->question_id, 'question_bodies');

                               $comment_user =  \App\Http\Controllers\UserController::CustomerId($question->question_id, 'post_comments');

                               $answer_poster = \App\Http\Controllers\UserController::CustomerId($question->question_id, 'post_answers');

                                 ?>
                                <img class="img-fluid rounded image-profile" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}">
                                 <hr>
                            </div>
                              

                            <h4> <span style="font-weight:800; color:#337ab7;">{{ ucfirst(strstr($question->user_id, '@', true)) }}

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

                                    <p class="down-files"><a href="{{route('file-download',
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
                                

                                 @elseif(Auth::user()->user_role === 'admin')
                                  <hr>
                                   @include('part.admin-links')

                                @elseif(Auth::user()->user_role === 'cust')
                                  <hr>
                                   @include('part.admin-links')

                                @endif

                                <hr>                          
                            
                            @include('modals.modals-all')

                            @include('modals.comments-add')                       

                    <!---End of question body -->
                              
                              </div>
              <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
 
                   <h4>
                          <span class="label" style="color:#2f5369;"> </span>
                      </h4>
              </div>
              <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                   <div style="width:30%; float: left"> 
                   
                   </div>
            
        
         
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>

    </div>
</section>
<section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">    

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>

                  <!-- Single Comment -->

            @foreach($comments as $comment =>$val )
            <li>
                <div class="col-md-12" style="margin-top:12px;">
                    <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}" alt="">
                    <div class="col-md-10">

                        <h5>Created at: {{$val->created_at}}</h5><p> {!! $val->comment_body !!} </p>

                        <?php $filescomm = \App\Http\Controllers\QuestionController::CommentFiles($val->comments_id, $question['question_id']);


                        ?>
                        <div style="background:#fef9e7 ; padding: 10px; border-radius: 12px">
                            <h3 style="font-size: 17px;"> Comment Attachments</h3>


                            @foreach($filescomm as $file23)

                                <p class="down-files"><a href="{{route('comment-files',
                                    ['question_id' =>$question['question_id'],
                                        'filename'=>$file23['basename'],
                                        'comment_id' =>$val->comments_id
                                     ])}}"
                                    ><i class="icon-download-alt">{{$file23['basename'] }}</a>   </p>
                            @endforeach

                        </div>

                    </div>
                </div>
              </li>

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
                <li>
                <blockquote class="blockquote" style="padding: 16px; border-top: 23px;">

                    <div class="col-md-12" style="margin-top:12px; background:#EEE8AA; border-radius: 8px;">
                        <img class="d-flex mr-3 col-md-2  image-comment rounded-circle" id="comm-pic" src="{{URL::asset('/storage/uploads/profile/'.$answer_poster.'/profile/profile.jpg')}}" alt="">
                        <div class="col-md-10">
                        <h5>Created at: {{$val->created_at}}</h5><p> {!! $val->answer_body !!} </p>      
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
                  </div>

                </blockquote>
              </li>
     
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
               </ol>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>MOBILE FRIENDLY</strong> - no special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="https://mobirise.com/">Try it now!</a></li>
                    <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="https://mobirise.com/">Try it now!</a></li>
                    <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="https://mobirise.com/">Try it now!</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="features9 cid-qI9JvgIkBq" id="features9-5">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-6">
                <div class="media-container-row">
                    <div class="card-img pr-2">
                        <span class="mbri-features mbr-iconfont"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            No Coding
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="media-container-row">
                    <div class="card-img pr-2">
                        <span class="mbri-star mbr-iconfont"></span>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            Mobile Friendly
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                </div>
            </div>

            

            
        </div>
    </div>
</section>


  <script src="{{ URL::asset('/theme1/sample/assets/web/assets/jquery/jquery.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/sample/assets/popper/popper.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/sample/assets/tether/tether.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/sample/assets/bootstrap/js/bootstrap.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/sample/assets/smoothscroll/smooth-scroll.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/sample/assets/theme/js/script.js') }}"></script>
    <script src="{{ URL::asset('/theme1/includes/iclude1/assets/web/assets/jquery/jquery.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/includes/iclude1/assets/popper/popper.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/includes/iclude1/assets/tether/tether.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/includes/iclude1/assets/bootstrap/js/bootstrap.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/includes/iclude1/assets/smoothscroll/smooth-scroll.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/includes/iclude1/assets/theme/js/script.js ')}}"></script>
  
  
</body>
</html>