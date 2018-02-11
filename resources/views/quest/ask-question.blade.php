@extends('layout.cust-dashboard-layout')

    @section('title')

    Client Dashboard

    @endsection

    @section('bodytext')

         <section class="testimonials4 cid-qI9LEZJgCJ" id="testimonials4-g">


          <div class="container">
            <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">
                ASK QUESTION
            </h2>
            <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5">
              Use this pannel to ask questions for tutors to answer. The system will select for you the best tutor to handle your work, or you can choose the tutor to ask question directly.
            </h3>
            <div class="col-md-12 testimonials-container">
              <form action="{{route('ask-questions')}}" method="post" enctype="multipart/form-data" class="ask-question">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="topic"> <h4>Select Question Category</h4></label>
                       <select type="text" name="topic" class="form-control"  id="topic">
                          @foreach($category as $item)
                            <option value="{{$item->category}}">
                              {{$item->category}}
                            </option>
                          @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        @include('part.ckeditor')
                    </div>

                    <div class="form-group">
                        <label for="comment">Special Instructions </label>
                        <textarea class="form-control" name="special" rows="5" id="comment"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="usr">Include Files</label>
                          <input type="file" class=" form-control" placeholder="No file selected"
                              name="file[]" multiple >
                    </div>
                    <div class="row">


                    <div class="row ">
                        <hr />
                        <br />

                        <div class="col-md-12 col-md-offset-2 form-group">
                            <button type="submit"  class="btn btn-warning btn-lg">Get Answer </button>
                        </div>


                    </div>
                </form>

          </div>
        </section>

        @endsection
         @section ('comments')
         <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">

             <div class="container">
                <div class="media-container-row">
                    <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                        <ol>
                          <li><strong>MOBILE FRIENDLY</strong> - no special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="https://Mobiriseirise.com/">Try it now!</a></li>
                            <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="https://mobirise.com/">Try it now!</a></li>
                            <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="https://mobirise.com/">Try it now!</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>

      @endsection
