@extends('layout.tut-layout1')

@section('body')

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article   class="col-xl-12 maincontent">
            <header class="page-header">
                <p><h1 style="margin-bottom:18px;" class="page-title">Customer Dashboard</h1></p>

            </header>

            <div class="col-lg-3 ">

                @include('part.cust-menu')

            </div>

            <div class="col-lg-9  main-content">
                <h1>Welcome!</h1>

            </div>
        </article>


    <!-- /Article -->

</div>
</div>

@endsection


