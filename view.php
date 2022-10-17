<!DOCTYPE html>
<html lang="en">

<?php

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    echo 'can get id:';echo$_GET['id'];
    require_once "ACCdatabase.php";
    $query = "SELECT * FROM ItemN WHERE id = ?";
    
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit(' Product does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit(' Id is not specified!');
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
            <li><a class="menuBar" href="">Shop New</a></li>
            <li><a class="menuBar" href="">Shop Used</a></li>
            <li><a class="menuBar" href="">Sell</a></li>
            <li><a class="menuBar" href="">About Us</a></li>
            <li><a class="menuBar active barLast" href="">My Account</a></li>
        </ul>
        <h2><b>Item Listing</b></h2>
        <form>
            <div class="cartItem">
                <div class="itemPhoto">
                    <img src="img/placeholder.png">
                </div>
                <div class="itemDetail">
                    <div class="productName"><?= $row['PName'] ?></div>
                    <div class="productCost">$99.9</div>
                    <table>
                        <tr>
                            <td>Shipping:</td>
                            <td class="shippingCost">$9.9</td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input class="amount text-1" type="number" value="1" min="1" required></td>
                        </tr>
                    </table>
                    <input class="submit" type="submit" value="Add to Cart" />
                </div>
            </div>
            <div class="productDescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed felis eget velit aliquet sagittis. Pharetra convallis posuere morbi leo urna molestie at. Congue quisque egestas
                diam in arcu cursus euismod quis viverra. Lorem ipsum dolor sit amet consectetur adipiscing. Massa sed elementum tempus egestas sed. Arcu vitae elementum curabitur vitae nunc sed velit dignissim sodales. Et tortor consequat id porta nibh
                venenatis cras. Tincidunt dui ut ornare lectus sit amet est placerat in. Mi sit amet mauris commodo quis. Convallis aenean et tortor at risus viverra adipiscing at. Ullamcorper morbi tincidunt ornare massa eget. Elementum nibh tellus molestie
                nunc. Et ultrices neque ornare aenean. Nunc faucibus a pellentesque sit amet porttitor eget. Enim lobortis scelerisque fermentum dui faucibus in. Aliquam malesuada bibendum arcu vitae elementum. Duis at tellus at urna condimentum mattis
                pellentesque. Pellentesque pulvinar pellentesque habitant morbi tristique. Viverra adipiscing at in tellus integer feugiat scelerisque varius morbi. Consequat mauris nunc congue nisi vitae suscipit tellus mauris a. Sed arcu non odio euismod
                lacinia at. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Proin sed libero enim sed faucibus turpis in. Tellus cras adipiscing enim eu turpis egestas pretium. Porta lorem mollis aliquam ut. Vel facilisis volutpat est velit
                egestas dui. Egestas pretium aenean pharetra magna ac. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget nullam. Sit amet massa vitae tortor. Nisi lacus sed viverra tellus in. Sit amet consectetur adipiscing elit
                pellentesque. Pellentesque massa placerat duis ultricies lacus sed turpis tincidunt. At varius vel pharetra vel turpis nunc eget lorem. Diam volutpat commodo sed egestas. Eget nunc scelerisque viverra mauris in aliquam sem. Nec tincidunt
                praesent semper feugiat nibh sed pulvinar. Placerat orci nulla pellentesque dignissim enim sit amet. Neque laoreet suspendisse interdum consectetur libero id.</div>

        </form>
    </div>
</body>

</html>