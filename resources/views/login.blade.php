<!DOCTYPE html>
<html lang="en">
<head>
	<title>Australia</title> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="css/angular.min.js"></script>
	<script type="text/javascript" src="css/bootstrap.min.js"></script>
	<script type="text/javascript" src="css/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
body{ height:100vh; overflow: hidden; padding-top:14vh; font-family: 'Arvo', serif;
		background-image: url('img/demo2.jpg');}
.log_reg{width:30vw; margin:15vh 35vw; padding:2vw;
		background: rgba(244,244,244,0.1);}
.nav-tabs li{width:13vw; color:#eef;}
.nav-tabs li a{width:13vw; color:#fff; text-shadow:1px 1px 1px #222; font-size:15px;}
.nav-tabs li a:hover{width:13vw; color:#fff; background:#41B6EB;  text-shadow:1px 1px 1px #222; border:1px solid #41B6EB; font-size:15px;}
.active a{ color:#fff!important; background:#41B6EB!important;  text-shadow:1px 1px 1px #222; border:1px solid #41B6EB!important; font-size:15px;}
.control-label{color:#fff; text-shadow:1px 1px 1px #222; font-size:15px;}
</style>

</head>


<body>
		<div class="log_reg">
			 <ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home"><b>Log in</b></a></li>
				<li><a data-toggle="tab" href="#menu1"><b>Register</b></a></li>
			  </ul><br>
			  

			  <div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					  <form class="form-horizontal" role="form">
							  <div class="form-group">
								<label class="control-label col-sm-4" for="email">Email:</label>
								<div class="col-sm-8">
								  <input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							  </div>
							  <div class="form-group">
								<label class="control-label col-sm-4" for="pwd">Password:</label>
								<div class="col-sm-8"> 
								  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
								</div>
							  </div>
							  <a class="pull-right" href="" style="color:#ddd; text-shadow:1px 1px 1px #445;">Forgot password?</a>
						</form>
				  </div>
				<div id="menu1" class="tab-pane fade">
					<form class="form-horizontal" role="form">
								  <div class="form-group">
									<label class="control-label col-sm-4" for="name">Name:</label>
									<div class="col-sm-8">
									  <input type="text" class="form-control" id="name" placeholder="User">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-4" for="email">Email:</label>
									<div class="col-sm-8">
									  <input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-sm-4" for="pwd">Password:</label>
									<div class="col-sm-8"> 
									  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
									</div>
								  </div>
						</form>
					</div>
			  </div>
		 </div>

</body>