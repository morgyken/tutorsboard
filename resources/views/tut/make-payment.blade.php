@extends('layouts.admin-layout-latest')

@section('header')

Tutor Payment Report

@endsection

@section('mycontent')



<style type="text/css">
    .mydiv{
        
        margin-bottom: 50px;
        padding: 20px;
    }
</style>


        <div class="col-sm-12 mydiv">
                  <h3>Payment Details</h3>
                  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
                  <p><a class="btn btn-lg btn-success" href="#" role="button">Request Advance Payment</a></p>
                  
        </div>

        <div class="col-sm-12 col-offset-3 mydiv">
                  <h4> Tutor Payment Profile</h4>
                  <hr>

                     <div class="col-sm-5"> Next Payment Date : </div>
                     <div class="col-sm-6"> {date} </div>   
               

                     <div class="col-sm-5"> Amount Pending : </div>
                     <div class="col-sm-6"> Ksh.456 </div>       

                     <div class="col-sm-5"> Amount on Queue: </div>
                     <div class="col-sm-6">Ksh. 340  </div>


                     <div class="col-sm-5"> Total amount Done: </div>
                     <div class="col-sm-6"> Ksh. 223 </div>          
                  
        </div> 

            

        
     

    @endsection
                

    


