<?php
session_start();
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$database = 'gaurav';

$db=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);

if($db->connect_error)
{
  die("Connection failed: " . $db->connect_error);
}
else{


}


 if(isset($_POST['register']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];




    $sql="INSERT INTO user (username,  email,password) VALUES ('$username','$email','$password')";


    $result=$db->query($sql);


    if( $result== TRUE)
    {

        echo ' run ';
        $_SESSION['username']=$username;
        $_SESSION['sucess']=" You are now logged in";
        header('location:profile.php');


    }
    else
    {
        echo 'not run';
    }

}




if(isset($_POST['login']))
{

  $username=$_POST['username'];
  $password =$_POST['password'];


  //$sql="select * from user  ";
  //$sql="SELECT * FROM user  WHERE email='$email' ";

  $sql = "SELECT * FROM user WHERE username='$username'and password='$password' ";


  $result = mysqli_query($db,$sql) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if( $result== TRUE)
  {

      echo ' run<br>';

      while($row = $result->fetch_assoc()){
          echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]." ".$row["password"]."<br>";

        }





  }
  else
  {
      echo 'error';
  }







  if($rows==1)
  {

    echo "running";

    $_SESSION['username']=$username;
    $_SESSION['sucess']="you are now logged in";
    header('location:profile.php');
   }

   else{
       echo "not running ";
   }





}













?>
