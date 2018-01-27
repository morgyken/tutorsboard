
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>


  <div id="paypal-button"></div>

  <script>
    paypal.Button.render({
      env: 'sandbox', // Or 'production',

      commit: true, // Show a 'Pay Now' button

      style: {
        color: 'gold',
        size: 'large'
      },

      payment: function(data, actions) {
        /* 
         * Set up the payment here 
         */

         payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: {{ session('order_amount')}}, currency: 'USD' }
                        }
                    ]
                }
            });
      },

      onAuthorize: function(data, actions) {
        /* 
         * Execute the payment here 
         */

          return actions.payment.execute().then(function(payment) {

                // The payment is complete!
                // You can now show a confirmation message to the customer
            });
      },

      onCancel: function(data, actions) {
        /* 
         * Buyer cancelled the payment 
         */
      },

      onError: function(err) {
        /* 
         * An error occurred during the transaction 
         */
      }
    }, '#paypal-button');


 </script>