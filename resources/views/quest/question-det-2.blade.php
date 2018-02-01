<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home-Assign: Questions</title>
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/web/assets/mobirise-icons/mobirise-icons.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/tether/tether.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/bootstrap/css/bootstrap.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/bootstrap/css/bootstrap-grid.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/bootstrap/css/bootstrap-reboot.min.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/dropdown/css/style.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/theme/css/style.css ') }}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/quest-det/assets/mobirise/css/mbr-additional.css ') }}" type="text/css">
  
</head>
<body>
  <section class="menu cid-qI6rykIhOD" once="menu" id="menu1-e">

  @include('part.new-student-nav') 

  <?php


    function ConvertTime12( $seconds){

        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");

        $days = $dtF->diff($dtT)->format('%a');

        if($days> 0){
            return $dtF->diff($dtT)->format('%a days %h hours');
        }
        else {
            return $dtF->diff($dtT)->format('%h hours %i min');
        }



    }

    function getDeadlineInSeconds1($deadline){


        $deadline = new \Carbon\Carbon($deadline);

        $now = \Carbon\Carbon::now();

        $difference = $deadline -> diffInSeconds($now);

        $TimeStart = strtotime(\Carbon\Carbon::now());

        $TimeEnd = strtotime($deadline);

        $Difference = ($TimeEnd - $TimeStart);

        if($Difference < 0){

            return 'Overdue';
        }



        $interval = ConvertTime12($difference);

        return $interval; // array ['h']=>h, ['m]=> m, ['s'] =>s

    }

    function getDeadlineInSeconds12($deadline){


        $deadline = new \Carbon\Carbon($deadline);

        $now = \Carbon\Carbon::now();

        $difference = $deadline -> diffInSeconds($now);

        $TimeStart = strtotime(\Carbon\Carbon::now());

        $TimeEnd = strtotime($deadline);

        $Difference = ($TimeEnd - $TimeStart);

        return $Difference;
    }
    ?> 

    
</section>

<section class="engine"><a href="https://mobirise.ws/q">website creator download</a></section><section class="testimonials5 cid-qI9OEX4Gjg" id="testimonials5-h">
    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">User Details&nbsp;</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
                    Mobirise is one of the easiest website development tools available today.
                </h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="media-container-column">
            

            
        <div class="mbr-testimonial align-center col-12 col-md-10">
                <div class="panel-item">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="{{ URL::asset('/theme1/quest-det/assets/images/face1.jpg')}}">
                        </div>
                        <p class="mbr-text mbr-fonts-style mbr-white display-7">
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style mbr-white display-7">
                             John Smith
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style mbr-white display-7">
                               Developer
                        </small>
                    </div>
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
        You may bid any questions below and have your bid accepted. the questions have been given, You may bid any questions below and have your bid accepted. the questions have been given 
    </h3>
    <div class="col-md-10 testimonials-container"> 
      

      @foreach($question as $quest=>$value)

    <?php 

    $array_of_deadline = getDeadlineInSeconds1($value->question_deadline);

    $deadline12 = getDeadlineInSeconds12($value->question_deadline);

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


    <div class="testimonials-item">
      
        <div class="user row">
          <div class="col-lg-3 col-md-4">
            <div class="user_image">
              <img src="{{ URL::asset('/theme1/quest-det/assets/images/face3.jpg')}}">
            </div>
          </div>
          <div class="testimonials-caption col-lg-9 col-md-8">
            <div class="user_text ">
              <p class="mbr-fonts-style  display-7">
                 <em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nostrum, quos voluptas fugiat blanditiis, temporibus expedita cumque </em>
              </p>
            </div>
            <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                 Helen
            </div>
            <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                 DESIGNER
            </div>
          </div>
        </div>
      </div>
     @endforeach
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


  <script src="{{ URL::asset('/theme1/quest-detassets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/popper/popper.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/tether/tether.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/bootstrap/js/bootstrap.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/smoothscroll/smooth-scroll.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/dropdown/js/script.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/touchswipe/jquery.touch-swipe.min.js ') }}"></script>
  <script src="{{ URL::asset('/theme1/quest-detassets/theme/js/script.js ') }}"></script>
  
  
</body>
</html>