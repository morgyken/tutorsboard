<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('all-questions')}}"><i class="fa fa-dashboard fa-2x fa-fw"></i> All Questions</a>
            </li>

            <li>
                <a href=""><i class="fa fa-question-circle fa-2x fa-fw"></i>Assigned  </a>
            </li>
            <li>

                <a href=""><i class="fa fa-users fa-2x fa-fw"></i>Answered</a>
            </li>
            <li>

                <a href=""><i class="fa fa-users fa-2x fa-fw"></i>Financial Report</a>
            </li>

            <li>
                <a href="{{route('tut-profile', ['email',Auth::User()->email])}}"><i class="fa fa-user fa-2x fa-fw" ></i>Account Profile</a>

                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>