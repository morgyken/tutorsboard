@extends('layout.main-layout')

@section('title', 'Welcome')




@section('content')
<div class="clearfix col-md-12">
    <h1> Make Payments here</h1>

<hr>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:88%">
            88% Complete (success)
        </div>
    </div>
    <hr>

<div class="row">

  <div class="col-md-offset-1 col-md-12" >
  	<div class="col-md-7">
  		
  		<h2> Order Details </h2>

			<p> Order No: {{ session('question_id')}} </p>
			<p> <h4>Order Summary </h4> {!! strip_tags(session  ('order_summary')) !!}  </p>
			<p> Order Deadline:{{ session ('deadline')}}  </p>
			<h3>Order Amount:  ${{ session('order_amount')}} </h3>

			<h4>We are responsive, moneyback guaranteed should you not be happy with any of our
			 services</h4>
  	</div>


    
    <div class="col-md-5">
    	<h2> Available payment Methods </h2>
    	
        	<img src="{{URL::asset('theme/assets/images/ppvisa.jpg') }}">

          <p>Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.
          </p>


    </div>

    
</div>
<div  class="col-md-12"> 
	<hr>
</div>
<div class="col-md-5">

<h2>Pay using Credit card</h2>
<p>
	Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.

</p>
    @include('quest.card-payment')
   
  </div>

<div class="col-md-2">	
 
  
</div>
<div class="col-md-5">

 <h2>Pay using Paypal</h2>
<p>
	Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.



	@include('cust.cust-paypal-pay')
	
</p>
  
</div>
  
</div>


@endsection

