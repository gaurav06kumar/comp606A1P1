 <!-- configration file for all pages   -->

<?php
   session_start();
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$database = 'gaurav';

$db=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$database);                   //creating the datbase connection

if($db->connect_error)
{
 die("Connection failed: " . $db->connect_error);
}



if(isset($_POST['register']))                                                    //if register button click then will run
{
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password =$_POST['password_1'];
 $password2 = $_POST['password_2'];


 if($password == $password2)
 {

   $check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' ";     //this will check  user already exits in database
   $result = mysqli_query($db, $check_query);
  // $user = mysqli_fetch_assoc($result);

   if (mysqli_num_rows($result) > 0)
   {
     echo '<script language="javascript">';
     echo 'alert("Username and email alredy exits")';
     echo '</script>';


   }
   else
    {
     $sql="INSERT INTO user (username,  email,password) VALUES ('$username','$email','$password')"; //enter the userdata in database


     $result=mysqli_query($db, $sql);


     if( $result== TRUE)
          {
       $_SESSION['username']=$username;                                         
       $_SESSION['sucess']=" You are now logged in";
       header('location:profile.php');
           }

   }

}

   else
   {


       echo '<script language="javascript">';
       echo 'alert("wrong password")';
       echo '</script>';

   }

}




if(isset($_POST['login']))                                                       //if login button click then will run
{

 $username=$_POST['username'];
 $password =$_POST['password'];



 $sql = "SELECT * FROM user WHERE username='$username'and password='$password' ";        //this will check if user exits


 $result = mysqli_query($db,$sql) or die(mysql_error());
 $rows = mysqli_num_rows($result);


 if($rows==1)
 {
   $_SESSION['username']=$username;
// $_SESSION['sucess']="you are now logged in";
   header('location:profile.php');
 }

 else{
   echo '<script language="javascript">';
   echo 'alert("Username/password is incorrect")';
   echo '</script>';
 }





}


if(isset($_POST['forgot']))                                                      //if forgot link click then will run
{

  $email=$_POST['email'];
  $sql="SELECT * FROM user WHERE email='$email'   ";                            //this will find the email  exits in database
  $result=mysqli_query($db,$sql) or die(mysql_error());
  $row=mysqli_num_rows($result);
  if($row==1)                                                                  //if email is present  move to reset password page
  {

     header('location:resetpass.php');
        $_SESSION['email']=$_POST['email'];                                     // store the email value in session
  }
  else {
    echo '<script language="javascript">';
    echo 'alert("email is not correct")';
    echo '</script>';

  }


}

if(isset($_POST['change']))                                                      //if email adress found in database then this will run
{

   $email=$_SESSION['email'];
   $password =$_POST['password_1'];
   $password2 = $_POST['password_2'];

if($password==$password2)
{

   $sql = "UPDATE user SET password='$password' WHERE email='$email'";          //this will update  the password
$result=mysqli_query($db, $sql);
if ($result=TRUE) {



echo "<script>if(confirm('Your Password change Sucessfully   Now Login')){document.location.href='login.php'};</script>";     //   user click ok then it move to login page       find from stackoverflow





} else {
  echo '<script language="javascript">';
  echo 'alert("password not changed")';
  echo '</script>';
}
}
else {
  {



        echo '<script language="javascript">';
        echo 'alert("  password not matched")';
        echo '</script>';


  }
}






}






?>
