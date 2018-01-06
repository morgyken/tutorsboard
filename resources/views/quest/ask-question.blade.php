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
                <p><h1 style="margin-bottom:18px;" class="page-title">Question Details</h1></p>

            </header>

            <div class="col-lg-3 ">

                @include('part.tutor-menu')

            </div>

            <div class="col-lg-9  main-content">


                <form action="{{route('ask-questions')}}" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        @include('part.ckeditor')
                    </div>

                    <div class="form-group">
                        <label for="comment">Special Instructions </label>
                        <textarea class="form-control" name="special" rows="5" id="comment"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="usr">Include Files</label>
                        @include('part.file-picker')
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="comment">Paper Format </label>
                            <div class="radio">
                                <label><input type="radio" value="APA" name="paper_format">APA</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" value="MLA" name="paper_format">MLA</label>
                                </div>
                                <div class="radio disabled">
                                  <label><input type="radio" value="Chicago" name="paper_format">Chicago</label>
                                </div>
                                <div class="radio disabled">
                                  <label><input type="radio" value="Harvard" name="paper_format">Harvard</label>
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comment">Academic Level </label>
                                <input type="text" class="form-control" name="academic_level">
                            </div>

                            <div class="form-group">
                                <label for="comment">Select Category </label>
                               @include('part.auto-com')
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 form-group">
                            <button type="submit"  class="btn btn-success btn-lg btn-block">Get Answer </button>
                        </div>
                    </div>
                </form>

            </div>
        </article>


    <!-- /Article -->

</div>
</div>

@endsection


