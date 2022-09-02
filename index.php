<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
  <script src="https://www.paypal.com/sdk/js?client-id=AUGmAdOyjusVsx_rh4vhf0P-zaAE1S2HpFH9u9F8SMfQNS6EFDrG9C5mkL7gfgCyTbgeSf621VRgZRSe&vault=true&intent=subscription">
  </script>

  <div id="paypal-button-container"></div>

    <script>
      var plan_id = 'P-8M648791XH177361WMMIXT5I';           
      paypal.Buttons({
        createSubscription: function(data, actions) {
          return actions.subscription.create({
            'plan_id': 'P-0P017599PJ094263KMMIXYCA' // Creates the subscription
          });
        },
        onApprove: function(data, actions) {
          alert('You have successfully created subscription ' + data.subscriptionID); // Optional message given to subscriber
        },
        onError: function(data, actions){
          alert(data);
        }
      }).render('#paypal-button-container'); // Renders the PayPal button
    </script>
  </body>
</html>