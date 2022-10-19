<!DOCTYPE html>
<html lang="en">

<?php

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
require_once "ACCdatabase.php";
$sql = "SELECT * FROM ItemN WHERE id = ?;";
            
$statement = mysqli_stmt_init($conn);
mysqli_stmt_prepare($statement, $sql); 
mysqli_stmt_bind_param($statement, 'i', $_GET["id"]);
mysqli_stmt_execute($statement);
$result = $statement->get_result()->fetch_assoc();
    // Check if the product exists (array is not empty)
    if (!$result) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        echo (' Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    echo (' Id is not specified!');
}
?>
<?php
session_start();

if (isset($_POST['addcart'])) {
    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'], "id");

        if(!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['PName'],
                "price" => $_POST['Cost'],
                "shipping" => $_POST['Ship'],
                "quantity" => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['PName'],
            "price" => $_POST['Cost'],
            "shipping" => $_POST['Ship'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}
?>

<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleCart.css">
    <meta charset="utf-8" />
    <meta name="author" content="Group" />
    <meta name="description" content="Item Listing" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!----<link rel="stylesheet" type="text/css" href="styles/style.css" /> -->
    <title>Item Listing</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to SENIOR</h1>
        <ul class="bar">
            <li><a class="menuBar active" href="shopNew.php">Shop New</a></li>
            <li><a class="menuBar" href="shopUsed.php">Shop Used</a></li>
            <li><a class="menuBar" href="sellUsed.html">Sell</a></li>
            <li><a class="menuBar" href="AccMain.php">My Account</a></li>
            <li><a class="menuBar barlast" href="logon.php">Login / Signup</a></li>
        </ul>
        <h2><b>Item Listing</b></h2>
            <form method = "post" action = "view.php?id=<?=$result['id'] ?>">
              <div class="cartItem">
                 <div class="itemPhoto">
                     <img src= "./img/<?php echo $result['filename']; ?>">
                 </div>
                <div class="itemDetail">
                    <h1 class="productName"><?= $result['PName'] ?></h1>
                    <input type="hidden" name="PName" value="<?= $result['PName'] ?>">
                    <div class="productCost">$<?= $result['Cost'] ?></div>
                    <input type="hidden" name="Cost" value="<?= $result['Cost'] ?>">
                    <table>
                        <tr>
                            <td>Shipping:</td>
                            <td class="shippingCost">$<?= $result['Ship'] ?></td>
                            <input type="hidden" name="Ship" value="<?= $result['Ship'] ?>">
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input class="amount text-1" type="number" name="quantity" value="1" min="1" max="<?= $result['Available_Amount'] ?>" required></td>
                        </tr>
                    </table>
                    <input class="submit" type="submit" name="addcart" value="Add to Cart" />
                </div>
            </div>
            <div class="productDescription"><?= $result['Description'] ?></div>

        </form>
    </div>
</body>

</html>