
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

        <h1> Tutor Payment Profile</h1>

        <hr>

     <article class="col-xl-12 maincontent">
         <div class="row myrow">

             <div class="col-sm-5"> Next Payment Date : </div>
             <div class="col-sm-6"> {date} </div>

         </div>
         <div class="row myrow">

             <div class="col-sm-5"> Amount Pending : </div>
             <div class="col-sm-6"> Ksh.456 </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Amount on Queue: </div>
             <div class="col-sm-6">Ksh. 340  </div>

         </div>

         <div class="row myrow">

             <div class="col-sm-5"> Total amount Done: </div>
             <div class="col-sm-6"> Ksh. 223 </div>

         </div>       

         

         <h2>Request Advance </h2>
         <hr>

         <div class="row myrow">

             <div class="col-sm-5">Enter advance Amount(cannot be more than 33% of the Amount Due) </div>
             <div class="col-sm-6">  </div>
         </div>
         
         <div class="row myrow">

             <div class="col-sm-5">Withdraw Pyments </div>
             <div class="col-sm-5">Enter the amount </div>
             <div class="col-sm-6">  </div>
         </div>




     </article>

<!-- /Article -->

            <hr>

@endsection
<!-- /Article -->