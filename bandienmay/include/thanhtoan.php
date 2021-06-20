<?php
session_start();
include_once('../db/connect.php');

$_SESSION['c'] = round($_SESSION['b']/22495,2);
?>
<style>
body{
   
}
.row-checkout {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
}

.col-25 {
    -ms-flex: 25%;
    /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%;
    /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%;
    /* IE10 */
    flex: 75%;
}

.col-25,
.col-50,
.col-75 {
    padding: 0 16px;
}

.container-checkout {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
}

input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.checkout-btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 58%;
    height: 55px;
    border-radius: 28px;
    cursor: pointer;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
}

.checkout-btn:hover {
    background-color: #45a049;
}



hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
    .row-checkout {
        flex-direction: column-reverse;
    }

    .col-25 {
        margin-bottom: 20px;
    }
}
</style>
<section class="section">
<h1 style="text-align: center;">Chọn phương thức thanh toán</h1>
    <div class="container-fluid">
        <div class="row-checkout">
<div class="col-75">
        <div class="container-checkout">
        <form id="checkout_form" action="success1.php" method="POST" class="was-validated">
            <div class="row-checkout">
            <div class="col-50">
            <center>
        <input type="submit" id="submit" value="THANH TOÁN COD" class="checkout-btn"></div>    
        </center>
            </br>
            </div>
            </form>
            <center>
            <div class="col-75">
            <div id="paypal-payment-button">
			</div>           
            </center>
            </div>
        </div>

    </div>
</section>


<script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>
								<script>
								paypal.Buttons({
								style : {
									color: 'blue',
									shape: 'pill'
								},
								createOrder: function (data, actions) {
									return actions.order.create({
										purchase_units : [{
											amount: {
												value: '<?php echo $_SESSION['c']; ?>'
												}
										}]
									});
								},
								onApprove: function (data, actions) {
									return actions.order.capture().then(function (details) {
										console.log(details)
										window.location.replace("http://localhost:8080/bandienmay/include/success.php")
									})
								},
								onCancel: function (data) {
									window.location.replace("http://localhost:8080/bandienmay/include/Oncancel.php")
								}
							}).render('#paypal-payment-button');</script>