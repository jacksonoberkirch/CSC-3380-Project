<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="creditgui.css" type="text/css" rel="stylesheet">
    <title>Time GUI</title>

</head>
<body>
    <div id="time-gui">
        <form class="payment-form" action="includes/payment.inc.php" method="POST">
        <div id="timeheader">
            <h3>Add a Credit Card</h3>
        </div>
        <div id="cc-info">
            <form id="cc-info-content">
                <h4>Credit Card Information</h4>
                <p>Card Number:</p> 
                <input type="text" name="cardnumber"> 
                <p id="expdate">Exp. Date:</p> 
                <input id="month" type="number" name="expmonth" min="1" max="12">
                <input id="year" type="number" name="expyear" maxlength="4" min="2018" max="2035">
                <p id="ccv">Security Code:</p> <input id="ccv-number" type="number" name="security" maxlength="4">
                <p id="zzip">Zip Code</p>      <input id="zip" type="text" name="zip">
                <div id="time-gui-footer">
                    <button id="addcardbtn" type="submit" name="submit">Continue</button>
                </div>
            </form>
        </div>

        <div id="b-info">
            <h4>Billing Information</h4>
            <div id="left">
                <form id="cc-name">
                    <p>First Name</p><input class="nameinput" type="text" name="fname">
                    <p id="lname">Last Name</p><input id="lnameinput" class="nameinput" type="text" name="lname">
                </form>

                <form id="address">
                    <p>Billing Address</p><input type="text" name="address">
                    <p>Billing Address 2</p><input type="text" name="address2">
                    <p>Country</p><input type="text" name="country">
                </form>
            </div>

            <div id="right">
                <form id="address2">
                    <p>City</p><input type="text" name="city">
                    <p>State</p><input type="text" name="state">
                    <p>Phone Number</p><input type="text" name="phone">
                </form>
            </div>
        </div>
    </form>
    </div>

</body>
</html>