@extends('layout.cust-dashboard-layout')
    
    @section('title')

    Client Dashboard

    @endsection

    @section('bodytext')

         <section class="testimonials4 cid-qI9LEZJgCJ" id="testimonials4-g">       

          
          <div class="container">
            <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">
                BROWSE QUESTIONS
            </h2>
            <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5">
                Browse the questions from the following list to obtain the best question for you to answer. Please select questions with the best deadline and answer possi
            </h3>
            <div class="col-md-12 testimonials-container">  

           

        @if(count($questions)==0)
            <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
                <div class="container">
                    <div class="media-container-row">
                        <div class="mbr-text counter-container mbr-fonts-style display-7">
                            <ul>
                                <div class="jumbotron">
                                  <h3>You have not posted any question yet.</h3>
                                  <p class="lead">Post a question for study help, let our Home-assign tutors help you in your course advice</p>
                                  <a class="btn btn-lg btn-primary" href="{{route('post-questions') }}" role="button">Post a Question Now &raquo;</a>
                                </div>                                                                  
                            </ul>
                        </div>
                    </div>
                </div>
            </section>             
        @else

          @foreach($questions as $quest=>$value)

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

            //tutor ID

             $user_id =  \App\Http\Controllers\UserController::CustomerId($value->question_id, 'question_matrices');


             $tutor =  \App\Http\Controllers\UserController::TutorId($value->question_id, 'question_matrices');
             //dd($user_id);

            ?>
              <div class="testimonials-item card-block">
                  <div class="user row">
                    <div class="col-lg-3 col-md-4">
                      <div class="user_image">
                        <img class="image-comment"  src="{{URL::asset('/storage/uploads/profile/'.$user_id.'/profile/profile.jpg')}}">
                      </div>
                      <div style="width:25%;float: left">
                             <h5>                             
                                  <span class="label label-warning "><?php 

                                  $ratings = App\Http\Controllers\AccountController::getAccountRating($value->tutor_id); ?></span>

                              </h5>
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
                                $user_id = \App\Http\Controllers\UserController::CustomerEmail($value->question_id, 'question_bodies');
                               ?> 
                           <h4>
                                  <span class="label" style="color:#2f5369;">Tutor ID:&nbsp&nbsp{{ $tutor }} <a href="#"> Ask the tutor Question </a></span>

                                  <div class="row" style="padding-top:9px; padding-bottom:8px; padding-left: 20px ">
                                    
                                    <p>Answered:&nbsp&nbsp <span class="badge" style="background-color:#4a5e83;font-size: 17px; "> {{ \App\Http\Controllers\QuestionController::questionStat('answered') }}</span>
                                     </p>

                                    <h4>&nbsp&nbsp Rating:&nbsp&nbsp </h4>
                                    @for($rate = 0; $rate < $ratings; $rate++ ) 

                                <span class="fa fa-star" style="position: relative; color:#ff9800; "></span>

                                  @endfor
                                  </div>

                                  
                              </h4>
                      </div>
                      <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7" ">
                           <div style="width:30%; float: left"> 
                            <h5 style="padding-bottom:20px;">
                                  @if(($deadline12/3600) > 24 )

                                      <span class="label label-success label-lg" style="font-size: 1.38rem; padding:7px;">
                                          {{ $array_of_deadline }}
                                      </span>
                                  @elseif(($deadline12/3600) > 15 )

                                      <span class="label label-info label-lg" style="font-size: 1.38rem; padding:7px;">
                                          {{ $array_of_deadline }}
                                      </span> 
                                  @elseif(($deadline12/3600) > 8 )

                                      <span class="label label-warning label-lg" style="font-size: 1.38rem; padding:7px;">
                                          {{ $array_of_deadline }}
                                      </span>                                                      

                                  @else 
                                  <span class="label label-danger label-lg" style="font-size: 1.38rem; padding:7px;">
                                          {{ $array_of_deadline }}
                                      </span>
                                  @endif

                                        </h5>                    
                              
                            </div>
                           <div style="width:25%; float: left">
                             <h5 style="font-size: 1.38rem; padding:7px;">{{$value->category}}</h5>
                           </div>
                           <div style="width:25%;float: left">
                             <h5>

                              
                                  <span class="label label-warning " style="font-size: 1.38rem; padding:7px;">${{$value->question_price}}.</span>              


                              </h5>
                           </div>
                            
                    
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

                

          @endif
           {{ $questions->links()}}

              
          </div>
        </section>

  
        @endsection
         @section ('comments')
         <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
     
             <div class="container">
                <div class="media-container-row">
                    <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                        <ol>
                          <li><strong>MOBILE FRIENDLY</strong> - no special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="https://Mobiriseirise.com/">Try it now!</a></li>
                            <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="https://mobirise.com/">Try it now!</a></li>
                            <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="https://mobirise.com/">Try it now!</a></li>
                      
                        </ol>
                    </div>
                </div>
            </div>
        </section>                   

      @endsection


