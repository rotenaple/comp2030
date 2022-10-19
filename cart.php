<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleCart.css">
    <meta charset="utf-8" />
    <meta name="author" content="Group" />
    <meta name="description" content="View" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!----<link rel="stylesheet" type="text/css" href="styles/style.css" /> -->
    <title>Cart</title>
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
        <h2><b>Shopping Cart</b></h2>
        <?php
        $total = 0;
        if(!empty($_SESSION['cart'])) {

            foreach($_SESSION['cart'] as $key => $item) {
                ?>
        <form action="shipping.php" method="post" enctype="multipart/form-data">

            <div class="cartItem">
                <div class="itemPhoto">
                    <img src="img/placeholder.png">
                </div>
                <div class="itemDetail">
                    <div class="productName"><?= $item['name'] ?></div>
                    <div class="productCost">$<?= $item['price'] ?></div>
                    <table>
                        <tr>
                            <td>Shipping:</td>
                            <td class="shippingCost">$<?= $item['shipping'] ?></td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td class="amount text-1"><?= $item['quantity'] ?></td>
                        </tr>
                        <tr>
                            <td>Item Total:</td>
                            <td class="amount text-1">$<?= number_format(($item['price']*$item['quantity'])+ $item['shipping'])  ?></td>
                        </tr>
                    </table>
                    <div class="buttonBar">
                    <input class="blueButton removeItem" type="submit" value="Remove Item" />
                </div>
                </div>
            </div>
            <?php
            
            $total = $total + (($item['price']*$item['quantity'])+ $item['shipping']);
        }
        }
        ?>
            
            <div class="bar bottomBar">
                <h3>Total Cost:$<?= number_format($total) ?> </h3>
                <input type="hidden" name="TCost" value="<?= number_format($total) ?>">
                <input class="bigYellow" name="buy" type="submit" value="Buy Now" />
            </div>

            <div class="bottomSpacer"></div>

        </form>
    </div>
</body>

</html>