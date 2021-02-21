
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>view a customer</title>
</head>
<style>
.center-div{
    margin:40px;
    background:#FAEBD7;
    border-radius:20px;
    
}
h3{
    color:white;
    text-align:center;
}
h1{
    text-align:center;
    text-transform:capitalize;
   color:maroon;
   padding:10px;
}
.container{
    padding:30px;
    background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
    border-radius:20px;
}
th{
    padding:20px;
}
td{
    padding:10px;
}
@media only screen and (max-width: 640px) and (min-width:360px) {
 
.container{
    padding:30px;
    background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
    border-radius:20px;
}
.center-div{
    margin:10px;
    background:#FAEBD7;
    background: #FAEBD7;
    border-radius:20px;
    
}
h1{
    padding:10px;
}

}
@media only screen and (max-width: 678px) and (min-width:425px) {
    .container{
    padding:30px;
    background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
    border-radius:20px;
}
.center-div{
    margin:10px;
    background:#FAEBD7;
    border-radius:20px;
    
}
h1{
    padding:10px;
}
}
@media only screen and (max-width: 570px) and (min-width:320px) {
    .container{
    padding:10px;
    background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
    border-radius:20px;
} 
.center-div{
    margin:10px;
    background:#FAEBD7;
    border-radius:20px;
    
} 
h1{
    padding:10px;
}  
}
a{
    color:white;
}
body {
  background: -webkit-linear-gradient(left, darkblue, #200dcfc0);
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #b40e0e;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: black;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: black;
}

h2.active {
  color: black;
  border-bottom: 2px solid #061170;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  button{
  background: -webkit-linear-gradient(left, green, #200dcfc0);
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}
input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
input[type=email] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #060ac2;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth button{
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #200ebb;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 


h1{
    text-align: center;
    color:white;
}
</style>
<body>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

   <h2><i>view  details</i></h2>

    <!-- Login Form -->
    <form method="POST">
      <input type="text"  class="fadeIn second" name="accountno" placeholder="Enter the accountno">
      
      <input type="submit" class="fadeIn fourth" name="submit"  value="search">
    </form>

  

  </div>
</div>
<h1>View  customers</h1>
    
    <div class="container">
   
    <div class="center-div">
    <div class="table-responsive">
    <table>
    <thead>
    <th>name</th>
    <th>email</th>
    <th>currentbalance</th>
    <th>accountno</th>
  
    

    </thead>
    <tbody>
    <?php
   
include "connection.php";
if(isset($_POST['submit']))
{
  $bal="";
  $amt="";
$accountno=$_POST['accountno'];
$selectquery="SELECT * FROM customer WHERE accountno=$accountno";
$query=mysqli_query($con,$selectquery);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $res['name'] ?></td>
    <td><?php echo $res['email'] ?></td>
    <td><?php echo $res['currentbalance'] ?></td>
    <td><?php echo $res['accountno'] ?></td>
  
    
    
    </tr>

    <?php
    $bal=$res['currentbalance'];
    
}



}

?>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
</body>
</html>
<?php


?>
