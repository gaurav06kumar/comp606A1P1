<?php  require 'server.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="header">
    <h2>Registration Form </h2>
  </div>
  <form method="post" action="registration.php">


<div class="input-group">
  <label>username</label>
  <input type="text" name="username" required>
</div>
<div class="input-group">
  <label>Email</label>
  <input type="email" name="email" required>
</div>
<div class="input-group">
  <label>Password</label>
  <input type="password" name="password_1" required>
</div>
<div class="input-group">
  <label>Confirm Password</label>
  <input type="password" name="password_2" required>
</div>
<div class="input-group">
  <button type="submit" name="register" class="btn">Register</button>
</div>
<p> Already a member? <a href="login.php"> sign in </a>
</p>

  </form>

</body>



</html>
