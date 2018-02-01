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

  <div class="col-md-7" >
<h2> Order Details</h2>

<p> Order No: </p>
<p> Order Summary </p>
<p> Order Deadline: </p>
<h3>Order Amount:  </h3>

<h4>Kindly be responsive, moneyback guaranteed should you not be happy with any of our services</h4>
</div>
<div class="col-md-5">
    @include('quest.card-payment')
  
</div>

  
</div>


@endsection

