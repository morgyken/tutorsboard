 

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
                         <img src="{{ URL::asset('/theme1/site-images/logo.png')}}" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="{{URL::to('/')}}"><h2><strong>Home-Assign</strong></h2></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#about">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>About us</a>
                </li>

                 @if (Auth::guest())
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('login') }}">    <span class="mbri-idea mbr-iconfont mbr-iconfont-btn"></span>
                        Login</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="{{ route('register') }}"><span class="mbri-speed mbr-iconfont mbr-iconfont-btn"></span>
                        Register</a>
                </li>
                @else

                <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>
                        Browse Jobs</a>
                </li>

                <li class="nav-item"><a class="nav-link link text-white display-4" href=""><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span>
                        {{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                         document.getElementById('logout-form').submit();"><span class="mbri-sun mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

                   @endif

              </ul>
           
        </div>
    </nav>