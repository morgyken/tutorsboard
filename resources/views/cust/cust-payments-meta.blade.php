@extends('layout.cust-gen-layout')

    @section('title')

    Client Dashboard

    @endsection

    @section('bodytext')

         <section class="testimonials4 cid-qI9LEZJgCJ" id="testimonials4-g">

          <div class="container">
            <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">
                Meta Data
            </h2>
            <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5">

              Include the following Information to Continue with the Checkout
            </h3>
            <div class="col-md-12 testimonials-container">


            <section class="mbr-section article content11 cid-qI9Iudr8h7" id="content11-3">
                <div class="container">
                    <div class="media-container-row">
                        <div class="mbr-text counter-container mbr-fonts-style display-7">
                            <ul>

                                  <div class="progress">
                                      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                          88% Complete (success)
                                      </div>
                                  </div>
                                  <hr>

                              <div class="row">

                                <div class=" col-md-12" >
                                  <div class="col-md-6 paragraph2">

                                    <div class="well">

                                      <h2> Order Details </h2>

                                      <p> Order Serial: {{ session('question_id')}} </p>
                                      <p> <h4>Order Summary </h4> {!! strip_tags(session  ('order_summary')) !!}  </p>
                                      <p> Order Deadline:{{ session ('deadline')}}  </p>
                                      <h4>Order Amount:  ${{ session('order_amount')}} </h4>

                                      <h4>We are responsive, moneyback guaranteed should you not be happy with any of our
                                       services</h4>

                                     </div>


                                  </div>



                                  <div class="col-md-5" >
                                    <h3> Available payment Methods </h3>

                                          <img src="{{URL::asset('theme1/site-images/paym23.jpg') }}" class="payment-method" >

                                        <p>Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.
                                        </p>


                                  </div>


                              </div>
                              <div  class="col-md-12">
                                <hr>

                                <h2>Fill in the following foms with the payment details</h2>
                              </div>
                              <div class="col-md-6" style="margin-top:4rem">
                                <form action="{{route('post.meta')}}" class="" method="post" >

                                        {{ csrf_field() }}


                                    <div class="form-group">
                                      <label>Full Name</label>
                                          <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                      <label>Country</label>
                                            @include('part.countries')
                                    </div>

                                    <div class="form-group" >
                                      <label>Zip Code</label>
                                          <input type="text" name="zip" class="form-control">
                                    </div>

                                  </div>

                                <div class="col-md-6"  style="margin-top:4rem">
                                    <div  class="form-group">
                                      <label>State</label>
                                          <input type="text" name="state" class="form-control">
                                    </div>
                                    <div class="form-group">
                                      <label>City</label>
                                          <input type="text" name="city" class="form-control">
                                    </div>

                                      <!--hidden fields -->

                                     <input type="hidden" name="email" value="{{ Auth::User()->email }}">

                                     <!--hidden fields -->

                                     <input type="hidden" name="name" value="{{ Auth::User()->name }}">

                                     <button type="input" class="btn btn-primary btn-lg">Continue to Checkout</button>

                                  </div>

                                  </form>

                              </div>

                              </div>


                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>



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
