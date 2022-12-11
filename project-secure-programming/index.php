


<!-- akun 1
username = admin
password = admin

akun 2
username = test
password = 123 -->

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="login-form">
  <form method="POST" action="authentication.php">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="Username" id="Username" name="Username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" id="Password" name="Password" autocomplete="new-password">
      </div>
      <a href="register.php" class="link">Register Now</a>
    </div>
    <div class="action">
      <button type="submit" class="button" name="loginButton">Sign in</button>
    </div>
  </form>
</div>

</body>
</html>
