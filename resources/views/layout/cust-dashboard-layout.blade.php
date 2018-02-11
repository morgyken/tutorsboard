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
  <title> Home-Assign: @yield('title')</title>

  <link rel="stylesheet" href=" {{ URL::asset('/theme1/includes/iclude1/assets/tether/tether.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/includes/iclude1/assets/bootstrap/css/bootstrap.min.css ')}}">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                <h2 class="pb-3 mbr-fonts-style display-2">User details&nbsp;</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">


                {{ Auth::User()->name}} has been Tutoring since
                    <?php
                      $date = new DateTime(Auth::User()->created_at);
                      echo $date->format("l jS \of F Y");
                ?>

                    <?php
                    //$date=date_create($posted);
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



<section class="cid-qItTrDVKNt" id="pricing-tables1-o">


    <div class="container">
        <div class="media-container-row">

            <div class="plan mx-2 my-2 justify-content-center col-lg-3">
                <li class="list-group-item col-md-12">

                    <div class="col-md-12" style="padding: 2px; margin-left: 0;">
                      @include('part.cust-menu')
                    </div>
                </li>
            </div>

            <div class=" mx-2 my-2 justify-content-center col-lg-9" style="padding-left: 20px;">

                <div class="plan-body pb-5">
                    <div class="plan-list align-left">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">

                            <li class="list-group-item col-lg-12 col-md-12" style="padding-left: 40px; padding-top: 40px;">

                          @yield('bodytext')

                            </li>
                        </ul>
                    </div>

                </div>
            </div>

    </div>
</section>

  @yield('comments')




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
