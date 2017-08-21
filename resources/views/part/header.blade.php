<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <script language="JavaScript" type="text/javascript" src="https://kevinroth.com/rte/html2xhtml.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('datetime/jquery.datetimepicker.css')}}"/>
    <script language="JavaScript" type="text/javascript" src="https://kevinroth.com/rte/richtext_compressed.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Richtext editor --->

    

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Search -->

    t>

    <!---end of search-->

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Vendor libraries -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>

    <!-- If you're using Stripe for payments -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

<div class="navbar-more-overlay "></div>
<nav class="navbar navbar-inverse navbar-fixed-top animate" style="font-size: 16px;">
    <div class="container navbar-more visible-xs">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="submit">Submit</button>
						</span>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav">
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-picture-o"></span>
                    Photos
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-bell-o"></span>
                    Reservations
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="navbar-header hidden-xs">
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <ul class="nav navbar-nav navbar-right mobile-bar">
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-home"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-info"></span>
                    <span class="hidden-xs">About the Boat</span>
                    <span class="visible-xs">About</span>
                </a>
            </li>

            @if (Auth::guest())
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-phone"></span>
                    <span class="hidden-xs" data-toggle="modal" data-target="#myModal">LogIn</span>

                </a>
            </li>
            <li>
                <a href="#">
                    <span class="menu-icon fa fa-phone"></span>
                    <span class="hidden-xs" data-toggle="modal" data-target="#registerModal">Register</span>

                </a>

            </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <hr>

                        <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Profile
                        </a>
                       </li>
                        <li><a href="{{ route('question.all') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Finance Dashboard
                            </a>
                        </li>

                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>

