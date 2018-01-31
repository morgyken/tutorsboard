@extends('layouts.admin-layout-latest')

<style type="text/css">
    
    .header1 > .badge{
        background-color: green;
        padding: 10px;
        font-size: 13px;
    }
    .mydiv div{
      padding: 25px;

    }
</style>

@section('header')

Tutor Profile

@endsection

@section('mycontent')

<h2> My Profile</h2>

<hr>
<div class="mydiv">

<article class="col-xl-12 maincontent">
         

             <div class="col-sm-5"> Account ID: </div>
             <div class="col-sm-6"> {{  $data->account_id}}</div>

       
             <div class="col-sm-5"> Writer Level: </div>
             <div class="col-sm-6"> Level {{ $data->account_level }} </div>

       
             <div class="col-sm-5"> Registration Date: </div>
             <div class="col-sm-6"> {{ $data->created_at }} </div>

             <div class="col-sm-5"> Account Status </div>
             <div class="col-sm-6"> {{ $data->account_status }} </div>

        

          
             <div class="col-sm-5"> Payment Method </div>
             <div class="col-sm-6"> {{ $data->payment_method }} </div>


       
             <div class="col-sm-5"> Payment Method </div>
             <div class="col-sm-6"> {{ $data->payment_account }} </div>

             <div class="col-sm-12"> 

                <p> Insert below the payment method that you would like to be used in processing payment, you can prefer MPESA or Equity Bank, we highly recommend members to use Equity card number.</p>
              </div>
             

         

      
             <div class="col-sm-12"> 
                <form action="{{ route('tut-account') }}" method="POST" id="">


                     <div class="form-group">
                        <div class="col-md-5 myform">Prefered Payment Method</div>

                            <select name="payment_method" form-control>
                                <option>Select </option>
                                <option value="Equity">Equity</option>
                                <option value="Cooperative">Cooperative Bank</option>
                                <option value="Airtel">AirTel</option>
                                <option value="Safaricom">Safaricom</option>
                                <                              
                            </select>

                        </div>

                    <div class="form-group myform">
                        <div class="col-md-5">Phone/Equity Account Number</div>

                            <div class="col-md-7">
                                <input id="payment_account" type="text" class="form-control" name="payment_account" required>
                            </div>
                        </div>
                        {{ csrf_field() }}


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Payments
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
        
                
</article>
</div>


@endsection
                

    


