@extends('layout.main-layout')

@section('content')


    </header>

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.blade.php">Home</a></li>
            <li class="active">Registration</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registration</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Upload profile piture Here </h3>
                            <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.blade.php">Login</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                            <hr>

                            <form class="form-horizontal" method="POST" action="{{ route('profile-pic', ['pic' => 'profile']) }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                               @include('part.file-picker')

                               <input type="hidden" name="pic" value="main-profile"/>


                               <div style="min-height: 25px"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md">
                                        <button type="submit" class="btn btn-primary">
                                            Upload
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection