<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorsboard.com</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('theme-one/theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ URL::asset('theme-one/theme/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ URL::asset('theme-one/theme/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('theme-one/theme/css/creative.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{URL::to('/')}}">Tutorsboard.com</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About us</a>
            </li>
            
            @if (Auth::guest())

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
            </li>

            <li class="nav-item">
              <a  class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('all-questions')}}">Browse Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  href="{{ route('register') }}">{{ Auth::user()->name }}</a>
            </li>
            
            <li  class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                         document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>


    
                @endif

           
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase" style="color: rgba(79, 134, 137, 0.8); text-shadow: 2px -1px blue;">
              <strong>Welcome to Tutorsboard</strong>
            </h3>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="background-color: rgba(192, 203, 217, 0.7); color: #111;text-shadow: 0px -1px black;">Sign up today and start earning. Getting jobs is as easy as signing up. Apply your Expertise and earn online.  </p>
            
              @if(!Auth::check())
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('register') }}">

              Sign Up today!
            </a>

              @else

              <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('all-questions')}}">

              Browse Jobs 
            </a>



              @endif



            </a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">What you need to signup</h2>
            <hr class="light my-4">
            <p class="text-faded">
              Prove your Expertise and show that you can answer questions with the appropriate depth and knowledge. Show that you can answer questions within the required time frame and the papers should be as original as possible.
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Competative Pricing</h3>
              <p class="text-muted mb-0">All orders are priced above the basic price of Ksh. 200 charged by many people in the market. The more orders you take, the more you earn.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Flexible Payment</h3>
              <p class="text-muted mb-0">When the writer manages Ksh. 3k they can request payments, payment is then processed within 6 hours. All payments are done via bank deposits </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Group Accounts</h3>
              <p class="text-muted mb-0">This is a unique feature allowing an expert writer to manage a group of writers and earn more in the process. Sign up today</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">We have a personla relationships with our Writers. We not only treat them as family but also as a close allies whom</p>
            </div>
          </div>
        </div>
     

     
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Easy Chat response</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"> Orders Throughout</h3>
              <p class="text-muted mb-0">We never run out of orders. Orders </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3"> Permanent Office</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Beginner Friendly</h3>
              <p class="text-muted mb-0">We never run out of orders. If you are a starter, easy orders for starters are available to quickstart your writing experience.</p>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Sign up today and become a Tutor.</h2>
        @if(!Auth::check())
        <a class="btn btn-light btn-xl sr-button" href="{{ route('register') }}">Sign up now</a>
        @else
        <a class="btn btn-light btn-xl sr-button" href="{{route('all-questions')}}">Browse Jobs</a>
        @endif
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact us today!</h2>
            <hr class="my-4">
            <p class="mb-5">If you are ready to start your journey as a tutor, sign up or contact us using the following address..</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+254-704-223370</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">tutorsboard.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>


    <div class="footer2" style="background-color: #090909">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="{{URL::to('/')}}">Home</a> |
                            <a href="#about">About</a> |
                            @if(!Auth::check())
                            <b><a href="{{route('register')}}">Sign up</a></b>
                            @else
                             <b><a href="{{ route('all-questions')}}">Browse Jobs</a></b>
                            @endif
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p style="color: #333; float: right">
                            Copyright &copy; 2017, Your name. Designed by <a href="http://clearleafs.com/" rel="designer">Clearleafs.com</a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::asset('theme-one/theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('theme-one/theme/vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('theme-one/theme/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ URL::asset('theme-one/theme/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{ URL::asset('theme-one/theme/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
