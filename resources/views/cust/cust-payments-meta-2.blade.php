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

    @include('part.customer-order')

</div>
<div  class="col-md-12">
	<hr>
</div>
<div class="col-md-offset-3">
  <form action="{{route('post.meta')}}" class="" method="post" >

          {{ csrf_field() }}

    <div  class="form-row form-group">
      <div>
        <label>Full Name</label>
            <input type="text" name="name" class="form-control">
      </div>

      <div>
        <label>Country</label>
            <input type="text" name="country" class="form-control">
      </div>
      <div>
        <label>State</label>
            <input type="text" name="state" class="form-control">
      </div>
      <div>
        <label>City</label>
            <input type="text" name="city" class="form-control">
      </div>

      <div>
        <label>Zip Code</label>
            <input type="text" name="zip" class="form-control">
      </div>

     <!--hidden fields -->

      <input type="hidden" name="email" value="{{ Auth::User()->email }}">

      <!--hidden fields -->

      <input type="hidden" name="name" value="{{ Auth::User()->name }}">

      <button type="input" class="btn btn-primary btn-lg">Checkout</button>

    </form>

</div>

</div>


@endsection
