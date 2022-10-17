<?php
require_once "ACCdatabase.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="COMP2030 Group1" />
    <meta name="description" content="Shop Items" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="styles/styleShop.css" />
    <title>Shop Items</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to SENIOR</h1>
        <ul class="bar">
            <li><a class="menuBar active" href="shopNew.php">Shop New</a></li>
            <li><a class="menuBar" href="shopUsed.php">Shop Used</a></li>
            <li><a class="menuBar" href="sellUsed.html">Sell</a></li>
            <li><a class="menuBar" href="">Messages</a></li>
            <li><a class="menuBar barLast" href="Register.html">My Account</a></li>
        </ul>

        <div class="searchBar">
            <select name="category" id="category" required>
        <option selected disabled hidden>Category</option>
        <option value="Tents">Tents</option>
        <option value="Cooking">Cooking</option>
        <option value="Tools">Tools</option>
      </select>
            <input type="text" class="searchBox" placeholder="Search...">
            <input type="button" class="searchBtn" value="Go!">
        </div>

        <?php
        $query = "SELECT * FROM ItemN";
        $result = mysqli_query($conn,$query);
        ?>

        <div>
        <?php
            while ($row = mysqli_fetch_array($result)){?>
            <form method="GET" class="flexParent" action="view.php?id=<?=$row['id'] ?>">


             
            <a class="flexChild" href="view.php?id=<?=$row['id'] ?>"><img src="img/placeholder.png" /> <br><?= $row['PName'] ?> $<?= $row['Cost'] ?></a>


<?php }
        ?>
        
        </div>
        </form>
        
        <div class="bar bottomBar">
            <a class="bigYellow" href="cart.html"> <img class="icon" src="img/icons/cart.svg" height="30" />Shopping Cart</a>
        </div>



        <div class="bottomSpacer">
        </div>

    </div>

</body>

</html>