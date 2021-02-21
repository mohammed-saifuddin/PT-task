<?php
include "connection.php";
if(isset($_POST['submit'])){


$accountno=$_GET['accountno'];
echo $accountno;

$select="select * from customer where accountno=$accountno";
$result=mysqli_query($con,$select);
if($result){
    echo "data is selected ";

}
else{
    echo "data is not selected";
}

}
echo "mohammed";

?>