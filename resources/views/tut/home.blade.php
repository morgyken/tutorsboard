
  
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ URL::asset('/theme1/all-questions/assets/images/logo2.png')}}" type="image/x-icon">
  <meta name="description" content="">
  <title>Home-Assign: Browse Questions</title>
  <link rel="icon" type="image/png" href="{{ URL::asset('/theme1/favi.png ')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ URL::asset('/theme1/favi.png ')}}" sizes="16x16" />


  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/web/assets/mobirise-icons/mobirise-icons.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap-grid.min.css ')}}">
   <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/bootstrap/css/bootstrap-reboot.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/dropdown/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/theme/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/all-questions/assets/mobirise/css/mbr-additional.css ')}}" type="text/css">
  
</head>

<body style="font-size: 20px">
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
                          Tutor

                           <p>Answered <span class="badge">{{ \App\Http\Controllers\QuestionController::questionStat('answered') }}</span>
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
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><p>Question ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Due Date: &nbsp;</p></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="testimonials4 cid-qI9LEZJgCJ" id="testimonials4-g">

  

  
  <div class="container">
    <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">
        BROWSE QUESTIONS
    </h2>
    <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5">
        Browse the questions from the following list to obtain the best question for you to answer. Please select questions with the best deadline and answer possi
    </h3>
    <div class="col-md-10 testimonials-container">  

    @if(count($question)==0)
    <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong> <span style="color:#f9533b">No Questions are available</span></strong>There seems to be no questions avalible in the platform at the moment. Please refresh <a href="https://mobirise.com/">Try it now!</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>

     
@else

  @foreach($question as $quest=>$value)

      <?php 

       $deadline11 = new   \App\Http\Controllers\DateTimeController();

      $array_of_deadline = $deadline11-> getDeadlineInSeconds1($value->question_deadline);

     // App\Http\Controllers\DateTimeController::getDeadlineInSeconds1($value->question_deadline);

     // $deadline12 = new DateTimeController();

      $deadline12= $deadline11->getDeadlineInSeconds13($value->question_deadline);

      ?>
        <script>
          $(document).ready(
           function() {
           setInterval(function() { 
           var someval = Math.floor(Math.random() * 100);
            $('#sample').text('Test' + someval);
           }, 500);  //Delay here = 5 seconds 
          });
    </script>
    <style type="text/css">
      #sample a{
        color: #0a090e;
      }

      #sample a:hover{
        color: #149dcc;
      }
    </style>
    <?php

     $user_id =  \App\Http\Controllers\UserController::CustomerId($value->question_id, 'question_matrices');

     //dd($user_id);

    ?>
      <div class="testimonials-item card-block">
          <div class="user row">
            <div class="col-lg-3 col-md-4">
              <div class="user_image">
                <img class="image-comment"  src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}">
              </div>
            </div>
            <div class="testimonials-caption col-lg-9 col-md-8">
              <div class="user_text" id="sample">
                <a href="{{route('view-question', ['question_id'=> $value->question_id])}}">
                <p class="mbr-fonts-style  display-7">
                   <em>{{ $value->summary  }}</em>
                </p>
              </a>
              </div>
              <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">

                    <?php 
                        $user_id =  \App\Http\Controllers\UserController::CustomerEmail($value->question_id, 'question_bodies');



                       ?> 
                   <h4>
                          <span class="label" style="color:#2f5369;"> {{ substr($user_id, 0, strpos($user_id, '@')) }}</span>
                      </h4>
              </div>
              <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                   <div style="width:30%; float: left"> 
                    <h5 style="padding-bottom:20px;">
                          @if(($deadline12/3600) > 24 )

                              <span class="label label-success label-lg ">
                                  {{ $array_of_deadline }}
                              </span>
                          @elseif(($deadline12/3600) > 15 )

                              <span class="label label-info label-lg ">
                                  {{ $array_of_deadline }}
                              </span> 
                          @elseif(($deadline12/3600) > 8 )

                              <span class="label label-warning label-lg ">
                                  {{ $array_of_deadline }}
                              </span>                                                      

                          @else 
                          <span class="label label-danger label-lg ">
                                  {{ $array_of_deadline }}
                              </span>
                          @endif

                                </h5>                    
                      
                    </div>
                   <div style="width:25%; float: left">
                     <h5>{{$value->category}}</h5>
                   </div>
                   <div style="width:25%;float: left">
                     <h5>

                      
                          <span class="label label-warning ">Ksh: {{$value->tutor_price}}</span>              


                      </h5>
                   </div>
            
              </div>
            </div>
          </div>
        </div>
        @endforeach

        

  @endif

      
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
<section class="mbr-section content4 cid-qI9IJ9MpuF" id="content4-4">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"></h2>
                <h3>
                  
                {{ $question->links()}}
                </h3>
                
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
</div>
</section>



  <script src="{{ URL::asset('/theme1/all-questions/assets/web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/popper/popper.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/tether/tether.min.js')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/bootstrap/js/bootstrap.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/smoothscroll/smooth-scroll.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/dropdown/js/script.min.js')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/touchswipe/jquery.touch-swipe.min.js ')}}"></script>
  <script src="{{ URL::asset('/theme1/all-questions/assets/theme/js/script.js ')}}"></script>
  
  
</body>
</html>