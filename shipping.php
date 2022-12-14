<?php
if (isset($_POST['buy'])) {
    $ftotal = $_POST['TCost'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="utf-8" />
    <meta name="author" content="Group" />
    <meta name="description" content="Shipping" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!----<link rel="stylesheet" type="text/css" href="styles/style.css" /> -->
    <title>Payment</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to SENIOR</h1>
        <ul class="bar">
            <li><a class="menuBar" href="shopNew.php">Shop New</a></li>
            <li><a class="menuBar" href="shopUsed.php">Shop Used</a></li>
            <li><a class="menuBar" href="sellUsed.html">Sell</a></li>
            <li><a class="menuBar active" href="AccMain.php">My Account</a></li>
            <li><a class="menuBar barlast" href="AccLog.html">Login / Signup</a></li>
        </ul>
        <h2>Payment</h2>
        <b>Accepted Cards</b>
        <div class="cardlogo">
            <i class="fa fa-cc-visa fa-2x" style="color:black"></i>
            <i class="fa fa-cc-mastercard fa-2x" style="color:black"></i>
            <i class="fa fa-cc-amex fa-2x" style="color:black"></i>
        </div>
        <form action="order.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name on Card</td>
                    <td class="text-1"><input name="cname" type="text" placeholder="Joe M Bloggs" required></td>
                    <td>Card Number</td>
                    <td class="text-1"><input name="cnum" type="text" placeholder="0000-0000-0000-0000" required></td>
                </tr>
                <tr>
                    <td>CVV</td>
                    <td class="text-1"><input name="cvv" type="text" placeholder="253" required></td>
                    <td>Expiry Date</td>
                    <td class="text-1"><input name="edate" type="text" placeholder="04/27" required></td>
                </tr>
            </table>

            <h2>Shipping Address</h2>
            <table>
                <tr>
                    <td>Address</td>
                    <td class="text-1"><input name="address" type="text" placeholder="1 North Tce" required></td>
                    <td>City</td>
                    <td class="text-1"><input name="city" type="text" placeholder="Adelaide" required></td>
                </tr>
                <tr>
                    <td>Zip code</td>
                    <td class="text-1"><input name="zip" type="text" placeholder="5000" required></td>
                    <td>State</td>
                    <td class="text-1"><input name="state" type="text" placeholder="South Australia" required></td>
                </tr>
            </table>

            <div class="bar bottomBar">
                <h3>Total Cost:$<?= number_format($ftotal) ?> </h3>
                <input type="hidden" name="FCost" value="<?= number_format($ftotal) ?>">
                <input class="bigYellow" name="order" type="submit" value="Place Order" />
            </div>

            <div class="bottomSpacer"></div>
    </div>
    </form>
</body>

</html>