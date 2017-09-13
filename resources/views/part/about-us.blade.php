<style>
    #reply, #message, #commit{
        padding-top: 12px;
        margin-top:20px;
    }
    #comm-pic{
        max-height: 80px;
        max-width: 100px;
    }
</style>

@extends('layout.main-layout')

@section('content')

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.blade.php">Home</a></li>
            <li class="active">Registration</li>
        </ol>

        <div class="row clearfix">

            <!-- Article main content -->
            <article class="col-xl-12 maincontent">

                

                <div class="col-lg-3">
                    @include('part.gen-tut-nav')
                </div>

                <div class="col-lg-9">

                    <h1>About us </h1>
                    We are committed to providing our clients with professional and quality writing services. With us in your stride, you can be sure of on time submissions, it's a guarantee. We have a team of talented and qualified writers who make it possible for us to meet the expectations of our clients. All our writers are well-qualified and experienced, and they are the most valuable possession of our company.
                    <p>
                        We are in constant look out for competent and dedicated writing professionals who are passionate about the writing profession. QualityWriters.net invites all interested writers to contact us for suitable projects. You can choose projects which suit your interest and expertise. Moreover, you can work at your own pace, and hence can make as much money as you want. We are looking for writers who specialize in essay writing, editing and resume writing. However, it is a must mention here that we are looking only for quality writers who are confident about their caliber. We do not accept articles with any kind of errors, and we do not accept copied work that is not original.</p>
                    <p>We are a professional writing service and we pay all our writers on time. We also provide our writers with the necessary support. If you are looking for a writing company that will facilitate you to grow professionally, then QualityWriters.net is the best possible choice for you. If you are confident of providing quality, original essays, then you are most welcome to join our talented team of writers right now.</p>

                </div>

            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>