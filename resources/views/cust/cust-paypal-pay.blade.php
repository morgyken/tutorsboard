<!DOCTYPE html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
  <div id="paypal-button"></div>

  <script>
    paypal.Button.render({
      env: 'production', // Or 'sandbox',

      commit: true, // Show a 'Pay Now' button

      client: {
            sandbox:    'AXIV-YkJ6upa8lS4tvy_nZMSR2t47UZZMsVkXBE_QACnHukg-qOz5WMI-9Y_AhYkrvfNM6r2gYplCtfp',
            production: 'Acg_dAGZReG-riFplRSzGBaUUw-guz4h3hf7skfmIwWbc3XddMiUnL1oZbODwchddZk1EtNINaGH9z87'
        },

        commit: true, // Show a 'Pay Now' button

      style: {
        color: 'gold',
        size: 'large',
      },


      payment: function(data, actions) {
        /*
         * Set up the payment here
         */
         return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: "{{ session('order_amount')}}", currency: 'USD' }
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
</body>
