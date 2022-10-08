<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $Fname = mysqli_real_escape_string($conn, $_POST['name']);
    $Lname = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

        $_SESSION['user_name'] = $row['name'];
        header('location:AccMain.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   };
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
            <li><a class="menuBar active" href="AccMain.html">Login / Signup</a></li>
        </ul>
        <h2>Log-in</h2>
        <form action="scripts/sellUsed_upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="column70">
                <table>
                <tr>
                    <td>First Name</td>
                    <td class="text-1"><input type="text" placeholder="Required" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="text-1"><input type="email" placeholder="Required" required></td>            
                </tr>
                <tr>
                    <td>Password</td>
                    <td class="text-1"><input type="text" placeholder="Required" required></td>
                </tr>
                </table>
                <td><br><a href="Register.html">Don't Have an Account?</a></td>
                    <td><input type="button" value="Log-in"></td>
            </div>
            
    </div>
</form>
  </body>
</html>