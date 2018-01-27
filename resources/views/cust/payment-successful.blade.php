@extends('layout.main-layout')

@section('title', 'Welcome')




@section('content')
<div class="clearfix col-md-12">
    <h1> Make Payments here</h1>

<hr>
    <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            100% Complete (success)
        </div>
    </div>
    <hr>

<div class="row">

  <div class="col-md-offset-1 col-md-12" >
  	<div class="col-md-7">
  		
  		<h2> Payment Successful </h2>

			<p>We are responsive, moneyback guaranteed should you not be happy with any of our
			 services</p>

  	</div>

  </div>    
    
</div>

@endsection

