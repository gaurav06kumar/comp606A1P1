<?php
 require 'server.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">

<div class="input-group">
  <label>Username</label>
  <input type="text" name="username" required>
</div>

<div class="input-group">
  <label>Password</label>
  <input type="password" name="password"required>
</div>

<div class="input-group">
  <button type="submit" name="login" class="btn">login</button>
</div>
<p> not  a member? <a href="registration.php"> sign up </a>
</p>

  </form>

</body>



</html>
