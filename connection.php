<?php 
$username="id16158246_mohammedsaifuddin";
$password="d_Fh<0@8}Y8^~NEL";
$server="localhost";
$db="id16158246_bankingsystem";
// $username="root";
// $password="";
// $server="localhost";
// $db="bankingsystem";
$con=mysqli_connect($server,$username,$password,$db);
if($con){
  
    // echo "connection is successful";
    
}
else{
   echo "no connection";
}


?>