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



<div>
<form method="post" action="registration.php">
<div class="container">
 <h1> Registration Form </h1>
 <p> fill up all the field</p>

  <label> Username  </label>

  <input type="text" name="username" required >


  <label>Email</label>
  <input type="email" name="email" required>

  <label>Password</label>
  <input type="password" name="password" required>





  <button type="submit" name="register" id="button_1" class="btn"  >Register</button>
  </div>

<p> Already a member? <a href="login.php"> sign in </a> </p>

  </form>
  </div>

</body>



</html>
