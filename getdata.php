<?php
require 'server.php';

$sql="select * from user";

 
$result=$db->query($sql);
 

if( $result== TRUE)
{
    
    echo ' run<br>';

    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]." ".$row["password"]."<br>";
      
      }



    

}
else
{
    echo 'not run';
}


?>