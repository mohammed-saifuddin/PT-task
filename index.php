<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Basic banking system</title>
</head>
<style>
body{
  background:white;
}
.navbar{
    text-align:center;
    background: -webkit-linear-gradient(left,maroon ,  #200dcfc0 );
}
.jumbotron{
  background:darkblue;
  color:white;
  padding:40px;
}
.navbar a{
  text-align:center;
}
a{
    color:white;
}
.container a{
    color:white;
}
.view{
  padding-top:60px;
  padding-left:200px;
  margin-left:200px;
}
.view1{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
}
.view2{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
  padding-bottom:70px;
}
#update{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:25px;
  padding-right:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );

}
#delete{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:25px;
  padding-left:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
#display{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:15px;
  padding-left:15px;
  background: -webkit-linear-gradient(left,darkblue,  #200dcfc0 );
}
 marquee{
   text-transform:capitalize;
   color:darkblue;
   padding:20px;
   font-size:bold;
   background: lightblue;
}
  #foot{
    color:white;
    padding-top:10px;
    text-align:center;
    padding:20px;
    
    padding-bottom:-200px;
    background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
  } 
  @media only screen and (max-width: 573px) and (min-width:375px) {
    #foot{
    color:white;
    padding-top:10px;
    text-align:center;
    padding:20px;
    background:darkblue;
  } 
  .view{
  padding-top:60px;
  padding-left:20px;
  margin-left:20px;
}
.view1{
  padding-left:40px;
  margin-left:40px;
  margin-top:20px;
  padding-top:20px;
}
.view2{
  padding-left:40px;
  margin-left:40px;
  margin-top:20px;
  padding-top:20px;
  padding-bottom:30px;
}
#update{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:25px;
  padding-right:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );

}
#delete{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:25px;
  padding-left:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
#display{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:15px;
  padding-left:15px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
 
  }
  @media only screen and (max-width: 640px) and (min-width:360px) {
    #foot{
    color:white;
    padding-top:10px;
    text-align:center;
    padding:20px;
    background:darkblue;
  } 
  .view{
  padding-top:60px;
  padding-left:200px;
  margin-left:200px;
}
.view1{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
}
.view2{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
  padding-bottom:30px;
}
#update{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:25px;
  padding-right:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );

}
#delete{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:25px;
  padding-left:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
#display{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:15px;
  padding-left:15px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
 
 }
 @media only screen and (max-width: 678px) and (min-width:425px) {
  #foot{
    color:white;
    padding-top:10px;
    text-align:center;
    padding:20px;
    background:darkblue;
  } 
  .view{
  padding-top:60px;
  padding-left:200px;
  margin-left:200px;
}
.view1{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
}
.view2{
  padding-left:200px;
  margin-left:200px;
  margin-top:20px;
  padding-top:20px;
  padding-bottom:30px;
}
#update{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:25px;
  padding-right:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );

}
#delete{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:25px;
  padding-left:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
#display{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:15px;
  padding-left:15px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
 }
 @media only screen and (max-width: 570px) and (min-width:320px) {
  #foot{
    color:white;
    padding-top:10px;
    text-align:center;
    padding:20px;
    background:darkblue;
  } 
  .view{
  padding-top:60px;
  padding-left:35px;
  margin-left:35px;
}
.view1{
  padding-left:35px;
  margin-left:35px;
  margin-top:20px;
  padding-top:20px;
}
.view2{
  padding-left:35px;
  margin-left:35px;
  margin-top:20px;
  padding-top:20px;
  padding-bottom:30px;
}
#update{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:25px;
  padding-right:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );

}
#delete{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:25px;
  padding-left:25px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
#display{
  padding:20px;
  padding-top:20px;
  padding-bottom:20px;
  padding-right:15px;
  padding-left:15px;
  background: -webkit-linear-gradient(left,darkblue ,  #200dcfc0 );
}
 
 }
</style>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Banking system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
  </div>
  </nav> -->
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Banking system</h1>
    <p class="lead">“Banking technology has made it simple and efficient to invest in good causes.”</p>
  </div>
</div>
  <marquee>
  welcome to online banking system
  </marquee>
  <div class="view">
  <button type="button"id="update" class="btn btn-danger"><a href="view.php">View all customers</a></button>
</div>
<div class="view">
<button type="button" id="display"class="btn btn-warning"><a href="customer.php">View customer details</a></button>
</div>
<div class="view1">
<button type="button" id="delete"class="btn btn-warning"><a href="transfer.php">Transfer of money</a></button>
</div>
<div class="view2">

</div>
<!-- </nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    


  
    <li class="breadcrumb-item active" aria-current="page"><a href="view.php">view All</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="customer.php">view</a></li>
 
    <li class="breadcrumb-item active" aria-current="page">money transfer</li>
  </ol>
</nav> --> 
<footer id="foot">
Developed by -Mohammed Saifuddin
</footer>
</body>
</html>