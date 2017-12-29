@extends('layouts.admin-layout-latest')

@section('header')

Make Tutor Payments

@endsection

@section('mycontent')



<style type="text/css">
    .mydiv{
        
        margin-bottom: 50px;
        padding: 20px;
    }
</style>



      
       <spanclass="col-md-6"><h2>Payment History</h2> </span>  <span class="col-md-6"> {{$total}} </span>       
                  

                  <table class="table">
                    <thead>
                        <?php 
                        $count =0; $amount =0;
                        $order_array = array();
                        ?>
                      <tr>
                        <th>#</th>
                        <th>Order ID</th>
                         <th> Tutor ID</th>
                        <th>Payment ID</th>
                          <th> Summary</th>

                          <th>Status</th>
                        <th>Amount </th>

                      </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $value) 
                      <tr>
                        <?php 
                        $count++; 
                        $amount += $value->amount;
                        $order_array[] =$value->order_id;

                        ?>
                        <td> {{ $count}}</td>
                        <td>{{ substr( $value->order_id, 0,10) }}...</td>
                        <td>{{ $value ->tutor_id}}</td>
                        <td>{{ $value ->payment_id}}</td>
                        <td>{!! str_replace('<h1>', '', $value->order_summary) !!}</td>
                            <td> <?php 
                              if($value->status == 0){
                                echo "Not paid";
                            } 
                            else{
                                echo "Paid";
                            } 


                            ?>
                       </td>
                        <td class="right"> Ksh.{{ number_format($value->amount, 2)  }}</td>
                     
                       
                      </tr>
                       @endforeach

                <?php  

                $data = json_encode($order_array);


                ?>
                      
                    </tbody>
                  </table>

                  <form method="POST" action=" {{ route('paytutor') }}">
                    <input type="hidden" name="tutor_id" value="{{ Auth::user()->email }}">
                    <input type="hidden" name="amount" value="{{ $amount }}">
                    <input type="hidden" name="paidby" value="{{ Auth::user()->email }}">
                   <input type="hidden" name="order_array" value="{{  $data  }}">
                      {{ csrf_field() }}
                    <button type="input" class="btn btn-lg btn-block btn-success">Make Payments </button>
                  </form>

                
                        
      
       
       
     

    @endsection
                

    


