<?php
require_once('authreg.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRegis.css">
    <title>Register</title>
</head>

<body>
    <div class="containerRegis">
        <h2>Create Account</h2>
        <br>
        <form action="" method="post">
            <div class="form-control">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email">
            </div>
            <div class="form-control">
                <label for="Username">Username</label>
                <input type="text" id="Username" name="Username">
            </div>
            <div class="form-control">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password">
            </div>
            <div class="form-control">
                <label for="Confirm-Password">Confirm Password</label>
                <input type="password" id="Confirm-Password" name="Confirm-Password">
            </div>
            <div class="signIn">
                <p>Already Have An Account? <a href="index.php">Login</a> Now</p>
            </div>
            <button type="submit" class="button" name="registerButton" >Register</button>
            
        </form>
    </div>
</body>
</html>