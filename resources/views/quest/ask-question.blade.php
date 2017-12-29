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

            <div class="col-lg-3">

                @include('part.tutor-menu')

            </div>

            <div class="col-lg-9">


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
                        <div class="form-group col-md-8">

                            <div  class="col-lg-3"> <label> Select Category</label></div>
                            <div class="col-lg-9"><input class="form-control"  name="category"  ></input></div>

                        </div>
                        <div class="col-md-4 form-group">
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


