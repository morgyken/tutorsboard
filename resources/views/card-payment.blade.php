  <style type="text/css">
      /**
     * The CSS shown here will not be introduced in the Quickstart guide, but shows
     * how you can use CSS to style your Element's container.
     */
    .StripeElement {
      background-color: white;
      height: 40px;
      padding: 10px 12px;
      border-radius: 4px;
      border: 1px solid #007acc;
      box-shadow: 0 1px 3px 0 #e6ebf1;
      -webkit-transition: box-shadow 150ms ease;
      transition: box-shadow 150ms ease;
    }

    form{
      border: 1px 1px 2px 1px #272822;
    }

    .StripeElement--focus {
      box-shadow: 2px 1px 3px 2px #5cb85c;

    }

    .StripeElement--invalid {
      border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
      background-color: #fefde5 !important;
    }

    .spacer{
      border-bottom: 23px;
    }

  </style>
    <form action="{{route('post-cust-payments')}}" method="post" id="payment-form">

        {{ csrf_field() }}

      <div  class="form-row form-group">
        <div>
          <label>Full Name on Card</label>
              <input type="text" name="name" class="form-control">
        </div>

       <!--hidden fields -->

              <input type="hidden" name="email" value="{{ Auth::User()->email }}">

        <!--hidden fields -->

              <input type="hidden" name="name" value="{{ Auth::User()->name }}">


      </div>
      <div class="form-row">
        <label for="card-element">
          Credit or debit card
        </label>
        <div id="card-element" class="spacer">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button class="btn btn-warning btn-lg btn-block" style="margin-top: 23px;">Submit Payment</button>
    </form>


<script type="text/javascript">
//public key

    var stripe = Stripe('pk_test_LvVBuMY1fQNF0g0xcJFU18ur');

    // Create an instance of Elements
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',

        fontSize: '16px',
        '::placeholder': {
          color:'#1847c2'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }

    };

    // Create an instance of the card Element
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element');


    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

  // Create a token or display an error when the form is submitted.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the customer that there was an error
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server
          stripeTokenHandler(result.token);
        }
      });
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server

      console.log(token);
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }

</script>
