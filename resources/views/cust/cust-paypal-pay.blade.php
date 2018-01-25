  
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
   
   <div id="paypal-button"></div>

  <script>
    paypal.Button.render({
      env: 'production', // Or 'sandbox',

      commit: true, // Show a 'Pay Now' button

      style: {
        color: 'gold',
        size: 'large'
      },

      payment: function(data, actions) {
        /* 
         * Set up the payment here 
         */

         return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '0.01', currency: 'USD' }
                            }
                        ]
                    }
                });
      },

      onAuthorize: function(data, actions) {
        /* 
         * Execute the payment here 
         */

         // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
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


