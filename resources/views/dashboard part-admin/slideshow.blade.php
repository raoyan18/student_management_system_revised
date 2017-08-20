<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../public/admin/css/style.css">
</head>
<body>
	<div class="header">
	<div class="row">
	 <!-- Title -->
	<div class="col-xs-6">
	<h2 style="margin-left:10px; margin-top:8px">Project</h2></div>
	
	 <!-- Profile -->
	<div class="col-xs-6">
	<div class="col-xs-11">
	<li class="dropdown pull-right">
								<a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile
								<span class="caret"></span></a>
								<ul class="dropdown-menu sub">
								  <a href="edit%20profile.blade.php"><li><i class="fa fa-user" aria-hidden="true"></i>Edit Profile</li></a>
								  <a href="add admin.blade.php"><li><i class="fa fa-user-plus" aria-hidden="true"></i>Add or remove</li></a>
								  <a href=""><li><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</li></a>
								</ul>
							  </li></div>
							  
							   <!-- Settings -->
							  <div class="col-xs-1">
								<li class="dropdown pull-right">
								<a class="dropdown-toggle pro" data-toggle="dropdown" href="#"><i class="fa fa-gear" aria-hidden="true"></i> </a>
								<ul class="dropdown-menu sub sub-long">

								  <li><h3>Set site title</h3>
									<input class="form-control" id="site-title" name="site-title" placeholder="site-title" type="text"></li>
									
									<li><h3>Set title-bar logo</h3>
									<input id="a" name="a" placeholder="Add a photo" type="file"></li>
									
									<li><h3>Set site logo</h3>
									<input id="a" name="a" placeholder="Add a photo" type="file"></li>
									
									<li><h3>Set address</h3>
									<input class="form-control" id="site-title" name="address" placeholder="Company address" type="text">
									<input class="form-control" id="site-title" name="cell" placeholder="Mobile number" type="text" style="margin-top:5px;">
									<input class="form-control" id="site-title" name="mail" placeholder="Email address" type="text" style="margin-top:5px;">
									<button class="btn btn-primary" type="submit" style="width:100%; margin-top:15px;">Done</button></li>
								
								
								</ul>
							  </li>
				</div>
				</div>
							  
				
							  </div>
	</div>
	
	 <!-- Sidebar -->
	<div class="row container-fluid">
		<div class="col-xs-2 menu">
			<div class="row menu-head">
				<div class="col-sm-4">
					<img src="../img/ss3.jpg" class="img-circle img-responsive" style="padding-left:10px;"></img>
				</div>
				<div class="col-sm-8">
					<h5>Saki Kowser</h5>
					<h6><i class="fa fa-circle" aria-hidden="true" style="color:#2b2; font-size:12px; padding-top:-12px;"> </i> Online</h6>
				</div>
			</div>
			<ul>
				<a href="admin.blade.php"><li><h5><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</h5></li></a>
				<a href="advise_students.blade.php"><li><h5><i class="fa fa-users" aria-hidden="true"></i> Students under advice</h5></li></a>
				<a href="project_students.blade.php"><li><h5><i class="fa fa-user-times" aria-hidden="true"></i>Students under project</h5></li></a>
				<a href="slideshow.blade.php"><li><h5><i class="fa fa-photo" aria-hidden="true"></i> Slideshow</h5></li></a>
				<a href="add links.blade.php"><li><h5><i class="fa fa-link" aria-hidden="true"></i> Add links</h5></li></a>
			</ul>
		</div>
				
				 <!-- Main COntents-->
				<div class="col-xs-10 content">
					<div class="cat">
						<h3>Slideshow</h3>
						  <div class="row">
							<div class="col-sm-3 form-group">
							  <h4 class="slide">Slide photo name</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <input class="form-control inbox-del" id="slide_name" name="slide_name" placeholder="Add slide name" type="text">
							</div>
						  </div> 
						  <div class="row">
							<div class="col-sm-3 form-group">
							  <h4 class="slide">Add photo for slide</h4>
							</div>
							<div class="col-sm-6 form-group slide">
								<input id="a" name="a" placeholder="Add a photo" type="file">
							</div>
							<div class="col-sm-2 form-group">
								<button class="btn btn-primary inbox-del pull-right"> Add Slider </button>
							</div>
						  </div>  
						  <div style="padding-top:10px; border-top:1px dotted #ccc;"></div>
						  <h3>Show sliders</h3>
						  <div class="row slide">
							  <div class="col-xs-3">
							  <h4>slider1</h4>
							  <img src="../../../public/admin/img/slider1.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider2</h4>
							  <img src="../../../public/admin/img/slider2.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider3</h4>
							  <img src="../../../public/admin/img/slider3.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider4</h4>
							  <img src="../../../public/admin/img/slider4.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
						  </div>
						  <div class="row slide">
							  <div class="col-xs-3">
							  <h4>slider1</h4>
							  <img src="../../../public/admin/img/slider1.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider2</h4>
							  <img src="../../../public/admin/img/slider2.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider3</h4>
							  <img src="../../../public/admin/img/slider3.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
							  <div class="col-xs-3">
							  <h4>slider4</h4>
							  <img src="../../../public/admin/img/slider4.jpg" class="img-thumbnail img-responsive">
							  <button class="btn btn-danger inbox-del">Delete</button>
							  </div>
						  </div>
			  
							<p class="notice"> *Select a name for your slider and add a photo then press ADD SLIDER button.</p>
			  
					</div>
		</div>
</body>
</html>