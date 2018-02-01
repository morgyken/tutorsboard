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
  <title>Home</title>

  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/web/assets/mobirise-icons/mobirise-icons.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/tether/tether.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/bootstrap/css/bootstrap-grid.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/bootstrap/css/bootstrap-reboot.min.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/dropdown/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/theme/css/style.css ')}}">
  <link rel="stylesheet" href="{{ URL::asset('/theme1/login/assets/mobirise/css/mbr-additional.css ')}}" type="text/css">
  <style type="text/css">
    
/*
    Note: It is best to use a less version of this file ( see http://css2less.cc
    For the media queries use @screen-sm-min instead of 768px.
    For .omb_spanOr use @body-bg instead of white.
*/
/* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 25px 0 50px;
  border: none;
  text-align: left;
  line-height: 45px;
  white-space: nowrap;
  font-weight: 700;
  border-radius: 0.2em;
  font-size: 26px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 35px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}

a:hover{
  color:#ddfffe;
}

</style>
  
  
</head>
<body>
  <section class="menu cid-qIcAItC0Wk" once="menu" id="menu1-0">
        @include('part.new-nav') 
</section>

<section class="engine"><a href="https://mobirise.ws/n">best website maker app</a></section><section class="cid-qIcALxgs9n mbr-fullscreen mbr-parallax-background" id="header15-1">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">LOGIN HERE</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">
            Click any text to edit or style it. Select text to insert a link. Click blue "Gear" icon in the top right corner to hide/show  text, title and change the block or form background. Click red "+" in the bottom right corner to add a new block. Use the top left menu to create new pages, sites and add themes.
        </p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            
            <form class="mbr-form" action="{{ route('register', ['user'=> 'cust']) }}" method="post">

              <input type="hidden" name="user_role" value="cust">

                {{ csrf_field() }}

                <div data-for="name">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="name" data-form-field="name" placeholder="name" required="" id="">
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>

                <div data-for="email">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control px-3" name="email" data-form-field="email" 
                        placeholder="email" required="">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div data-for="password">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control px-3" name="password" data-form-field="password" placeholder="Password" required="" id="email-header15-1">

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                                 
                
                <span class="input-group-btn">

                    <button type="input" class="btn btn-secondary btn-block btn-form display-4">REGISTER</button>
                </span>

            </form>

             <hr>
             <h4 style="color:#fff; text-align: center;">Or</h4>
             <hr>

              <button class="loginBtn loginBtn--facebook">
                Login with Facebook
              </button>

              <button class="loginBtn loginBtn--google">
                Login with Google
              </button>
        </div>
    </div>
    </div>
</div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>



@include('part.new-footer')

 <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>

