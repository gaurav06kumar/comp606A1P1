<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>user registration system using php and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>Profile Page </h2>
  </div>
  <div class ="content">
      <?php if(isset($_SESSION['sucess'])):  ?>
        <div class="error sucess">
           <h3>
             <?php
              echo $_SESSION['sucess'];
              unset($_SESSION['sucess']);
              ?>
            </h3>
          </div>
        <?php endif ?>
<?php if(isset($_SESSION["username"])): ?>
  <p> welcome <strong><?php echo'  '. $_SESSION['username']; ?></strong></p>
  <p> <a href="logout.php" style="color:red;">logout </a></p>
<?php endif ?>


  </div>
</body>

</html>
