<?php 
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in";
    header("Location: AccLog.html");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="COMP2030 Group1" />
    <meta name="description" content="My Account" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script src="Scripts/Select.js" defer></script>
    <title>My Account</title>
  </head>
  <body>
    <div class="container">
        <h1>Welcome to SENIOR</h1>
        <ul class="bar">
            <li><a class="menuBar" href="">Shop New</a></li>
            <li><a class="menuBar" href="sellUsed.html">Shop Used</a></li>
            <li><a class="menuBar barlast" href="">Sell</a></li>
            <li><a class="menuBar" href="">About Us</a></li>
            <li><a class="menuBar active" href="myAccount.html">My Account</a></li>
        </ul>
     <?php if (isset($_SESSION['success'])) : ?>
            <h2 id="ACCINFO">Your Account Infomation</h2>

        <div>
            <img id="ACCIMG" src="file">
            <input type="button" id="ACC-UPLDIMG" value="Upload Image">
        </div>
        <form action="Accupdate.php" method="post" enctype="multipart/form-data">
        <tr>
            <td>Update Username</td>
            <td class="text-2"><input name="Username" type="text" placeholder="Required"></td>
        </tr>
        <br>
        <tr>
            <td>Update Email-Address</td>
            <td class="text-2"><input name="Email" type="text" placeholder="Required"></td>
        </tr>
        <br>
        <tr>
            <td>Update Password</td>
            <td class="text-2"><input name="Password" type="password" placeholder="Required"></td>
        </tr>
        <br>
        <td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
     </form>
     <?php endif ?>
    </body>
</html>

