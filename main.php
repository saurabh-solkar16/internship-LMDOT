<!DOCTYPE html>
<html>
<head>
	<title>LMDOT admin panel</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' >
  <style type="text/css">
  	#leftmenu{
  		margin-top: 20px;
  		 background-color: #357196;
  		 height: auto;
  		 width: auto;
  		 color:white;
  		  font-size:  20px;
  		  color:white;
  		font-family: "Comic Sans MS", cursive, sans-serif;
  		  text-align: center;

  	}

  	.navbar-inverse{
  		background-color: #1d4077;

  	}

#leftmenu:hover { 
    background-color: #17202d;
    padding: 7px;
}

  	.container-fluid{
  background-color: #a3bbe0;

}
  </style>
   <script type="text/javascript">
 var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/order", {

        templateUrl : "order.php"
    }).when("/dashboard", {

        templateUrl : "dashboard.php"
    }).when("/accaunt", {

        templateUrl : "accaunt.php"
    });
    
});
  	  </script>
</head>
<body class="container-fluid" ng-app="myApp" >

<div class="row" style="padding-top: 0px;">
	<div class="col-lg-2 animated bounceInDown " style=" padding-top:5px;  " >
<div  style="background-color: #111428;padding-bottom: 5px;padding-top: 15px;">
		<center>
		<img src="images/oscar.png" style="height: 80px;width: 80px;border: 2px solid gray;padding: 2px; background-color: white;" class="img-circle">
		<h4 style="color:white;font-family: 'Times New Romen';font-weight: bold;">Saurabh solkar <br> <span class="glyphicon glyphicon-cog" style="font-size: 20px;"></span></h4>

	
	</center>
</div>
<div style="background-color: #357196;padding-top: 5px; padding-bottom: 5px;">
	<center>
		<div id="leftmenu" ><span class="glyphicon glyphicon-dashboard" style="float: left;font-size: 25px; width: 100%;"></span><a href="#!dashboard" style="color: white;"> Dashboard</a></div>
		<div id="leftmenu" ><span class="glyphicon glyphicon-tasks" style="float: left;font-size: 25px;width: 100%;"></span> <a href="#!order" style="color: white;">Orders</a></div>
		<div id="leftmenu" ><span class="glyphicon glyphicon-user" style="float: left;font-size: 25px;width: 100%;"></span><a href="#!accaunt" style="color: white;">Accaunt</a></div>
		<div style="margin-top: 100%;">
		<div ><center><span class="fa fa-facebook-official " style="font-size: 50px;color:white;"></span> </center></div>
		<div><center><span class="fa fa-twitter " style="font-size: 50px;color:white;"></span> </center></div>
	  </div>
	</center>
	</div>	


	</div>
	
	<div class="col-lg-10 animated bounceInRight "  >

  <div class="container-fluid" style="background-color:#1e3a68;padding: 10px;color: white;">
  <center><span class="fas fa-wallet" style="float: left;font-size: 20px;" > : 4000</span></center>
  <div> <span class="glyphicon glyphicon-user" style="float: right;font-size: 20px;"> <p>Saurabh solkar </p></span>
  </div>
    
    </div>



	</div>
  <div class="panel panel-default">

  <div class="panel-body">
    <div ng-view></div>
  </div>
</div>

</div>
</body>
</html>