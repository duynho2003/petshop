<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="theForm" method="POST" action="index.php">
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                </div>
            </div>
        </div>
        <div class="container">
            <script src="https://www.paypal.com/sdk/js?client-id=AVkFJNDwx4HO4IloZNSeNgDotbwt3pYAu0nqOaYh9uTEHocf9NFuPBkusDBPqjkGD-KyWzMhsfp3K7qp"></script>
            <div id="paypal-button-container"></div>
            <script>
                paypal.Buttons({
                    createOrder: function(data, actions) {
                        // This function sets up the details of the transaction, including the amount and line item details.
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: "10.00" // Replace with the actual value of $_SESSION['total']
                                }
                            }]
                        });
                    },
                    onApprove: function(data, actions) {
                        // This function captures the funds from the transaction.
                        return actions.order.capture().then(function(details) {
                            // This function shows a transaction success message to your buyer.
                            alert('Transaction completed by you');
                            document.getElementById('payment').innerHTML = '<input name="payment" value="paypal" hidden>';
                            document.getElementById('theForm').submit();
                        });
                    }
                }).render('#paypal-button-container');
            </script>
        </div>
    </form>
</body>

</html>