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


            <section class="mbr-section article content11 cid-qI9Iudr8h7 clearfix"  id="content11-3">
                <div class="container">
                    <div class="media-container-row">
                        <div class="mbr-text counter-container mbr-fonts-style display-7">
                            <ul>

                                  <div class="progress">
                                      <div class="progress-bar progress-bar-success progress-bar-striped"
                                      role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                          100% Complete (success)
                                      </div>
                                  </div>
                                  <hr>

                              <div class="row">

                            @include('part.customer-order')


                              </div>
                              <div  class="col-md-12 center">


                                <h2>Payment Success</h2>


                                <h2><a href="{{route('cust-dashboard')}}"> Return to dashboard </a> The question will be handled by our experts </h2>


                              </div>
                              <div  class="col-md-5">
                                  <hr>
                              </div>
                              <div class="col-md-offset-2 col-md-8 well center">

                              <h2>Pay using Credit card</h2>

                              <p>
                              	Enter your credit card details here to pay with credit card.Security is one of our main concers. Thank you for choosing home Assignment
                              </p>
                                  @include('cust.card-payment')

                                </div>

                                <div  class="col-md-5">
                                    <hr>
                                </div>
                                <div  class="col-md-2">
                                    <h2>OR </h2>
                                </div>
                                <div  class="col-md-5">
                                    <hr>
                                </div>




                              <div class="col-md-offset-2 col-md-8 well center">

                               <h2>Pay using Paypal</h2>
                              <p>

                              	Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.
                              	@include('cust.cust-paypal-pay')

                              </p>

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
