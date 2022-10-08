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
        <h2>Register</h2>
        <form action="config.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="column70">
                <table>
                <tr>
                    <td>Username</td>
                    <td class="text-1"><input name="Username" type="text" placeholder="Required" required></td>
                    <td>FullName</td>
                    <td class="text-1"><input name="FullName" type="text" placeholder="Required" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="text-1"><input name="email" type="email" placeholder="Required" required></td>
                    <td>Date of Birth</td>
                    <td class="text-1"><input name="DOB" type="date" placeholder="Required" required></td>                
                </tr>
                <tr>
                    <td>Password</td>
                    <td class="text-1"><input name="password" type="password" placeholder="Required" required></td>
                    <td>Confirm Password</td>
                    <td class="text-1"><input name="cpassword" type="password" placeholder="Required" required></td>
                </tr>
                </table>
                <td><br><a href="AccLog.html">Already have an Account?</a></td>
                    <td><input type="button" name="Submit" value="Sign-up"></td>
            </div>
            
    </div>
</form>
  </body>
</html>
