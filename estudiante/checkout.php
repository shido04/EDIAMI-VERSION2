<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AU2biD9ZO7I2NDUgwxb4mgIi64AtQ01n7h-7lMUhs9gy7Znj36UbeIncjAc-C8QgVAlUAz3Ea41cuB4t&currency=MXN"></script>
</head>

<body>

   <div id="paypal-button-container"></div>
   <script>
     paypal.Buttons({
        style:{
            color: 'blue',
            shape: 'pill',
            label: 'pay',
        },
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: "100"
                    }
                }]
            });
        },

        onCancel: function(data){
            alert("pago cancelado")
        }
     }).render('#paypal-button-container');
   </script>

</body>

</html>
