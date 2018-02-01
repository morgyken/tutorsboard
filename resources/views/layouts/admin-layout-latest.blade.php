@extends('layout.main-layout')

@section('content')



<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.blade.php">Home</a></li>
        <li class="active">Registration</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-xl-12 maincontent">
            <header class="page-header">
                <p><h1 style="margin-bottom:18px;" class="page-title">@yield('header')</h1></p>

            </header>

            <div class="col-lg-3">

                @include('part.tutor-menu')

            </div>

            <div class="col-lg-9">

            @yield('mycontent');
                

            </div>
        </article>


    <!-- /Article -->

</div>
</div>

@endsection


