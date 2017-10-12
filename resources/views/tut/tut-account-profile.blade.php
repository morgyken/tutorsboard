
<style>

    .myrow{
        margin-top:40px;
    }
</style>


@extends('layout.tut-layout1')

@section('body')
    <div class="col-lg-3">

        @include('part.vertical-menu1')

    </div>

    <div class="col-lg-9">

        <h1> Tutor Account Profile</h1>

        <hr>

     <article class="col-xl-12 maincontent">
         <div class="row myrow">

             <div class="col-sm-5"> Writer ID: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">
             <div class="col-sm-5"> Writer Level: </div>
             <div class="col-sm-6">  </div>

         </div>

         <h2> Payment Details </h2>
         <hr>

         <div class="row myrow">

             <div class="col-sm-5"> Mpesa Line: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Paypal: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Card Attached: </div>
             <div class="col-sm-6"> None </div>

         </div>
         <h2> Change Password</h2>

         <div class="row myrow">

             <div class="col-sm-5"> Current Password: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> New Password: </div>
             <div class="col-sm-6">  </div>

         </div>
         <div class="row myrow">

             <div class="col-sm-5"> Confirm Password: </div>
             <div class="col-sm-6">  </div>

         </div>

       


         <h2> Success Rate </h2>
         <hr>

         <div class="row myrow">

             <div class="col-sm-5">QA Ratings : </div>
             <div class="col-sm-6">  </div>
         </div>

         <div class="row myrow">

                 <div class="col-sm-5"> Revisions : </div>
                 <div class="col-sm-6"> 0 </div>

             </div>

         <div class="row myrow">

             <div class="col-sm-5"> Late Submissions: </div>
             <div class="col-sm-6">  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Refunds: </div>
             <div class="col-sm-6">  </div>

         </div>

  <button type="input" class="btn btn-block myrow" >Save the changes</button>


     </article>

<!-- /Article -->

            <hr>

@endsection
<!-- /Article -->