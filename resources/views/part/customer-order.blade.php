<div class=" col-md-12" >
  <div class="col-md-6 paragraph2">

    <div class="well">

      <h2> Order Details </h2>

      <p> Order Serial: {{ session('question_id')}} </p>
      <p> <h4>Order Summary </h4> {!! strip_tags(session  ('order_summary')) !!}  </p>
      <p> Order Deadline:{{ session ('deadline')}}  </p>
      <h4>Order Amount:  ${{ session('order_amount')}} </h4>

      <h4>We are responsive, moneyback guaranteed should you not be happy with any of our
       services</h4>

     </div>


  </div>



  <div class="col-md-5" >
    <h3> Available payment Methods </h3>

          <img src="{{URL::asset('theme1/site-images/paym23.jpg') }}" class="payment-method" >

        <p>Utamur vivendo argumentum vel in. Est no dicit congue. Eum ad mazim consetetur, mel ut porro assum delicata, eu error nullam disputando has. Ut eum graeci electram, an ius blandit vituperatoribus.
        </p>


  </div>
