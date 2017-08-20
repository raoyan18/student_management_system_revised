@extends('layouts.admin_base')
@section('admin_content')


<!-- Main COntents-->
				<div class="col-xs-10 content">
				<div class="cat">
				<h3>Add an admin</h3>
			  <div class="row">
			  <div class="col-sm-9" style="padding-right:30px">
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Name:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Re-enter Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="re-pass" name="re-pass" placeholder="Password" type="password" required>
				</div>
			  </div> 
			 <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Email:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="mail" name="mail" placeholder="Email" type="email" required>
				</div>
			  </div> 
			 <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Designation:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="dsgntn" name="dsgntn" placeholder="Designation" type="email">
				</div>
				
				
			  </div> 
			  
			 
			  
			   
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Add a photo</h4>
				</div>
				<div class="col-sm-8 form-group">
					<input id="a" name="a" placeholder="Add a photo" type="file">
			    </div>
			  </div> 
			  
			  <p class="notice"> *Be sure before adding one more admin to your page. Because, (s)he will get the full power to change page layout, contents and everything else. It is for your page's safety.</p>
			  </div>
			  
			  <!-- Right side photo showing portion -->
			  <div class="col-sm-3 form-group">
				 
				
				<!--remove admin-->
				<div class="row">
				<ul class="cat" style="margin-top:-40px; margin-bottom:40px;">
				<h3>Remove an admin</h3>
				<li style="margin:15px; list-style:none;"><img src="../../../public/admin/img/pro.jpg" style="height:40px;" class="img-thumbnail img-responsive"><b style="font-size:16px"> Tazwar utshas </b><a href="#" style="color:#a00; margin-left:15px;"> remove </a></li>
				<li style="margin:15px; list-style:none;"><img src="../../../public/admin/img/pro.jpg" style="height:40px;" class="img-thumbnail img-responsive"><b style="font-size:16px"> Tazwar utshas </b><a href="#" style="color:#a00; margin-left:15px;"> remove </a></li>
				<li style="margin:15px; list-style:none;"><img src="../../../public/admin/img/pro.jpg" style="height:40px;" class="img-thumbnail img-responsive"><b style="font-size:16px"> Tazwar utshas </b><a href="#" style="color:#a00; margin-left:15px;"> remove </a></li>
				</ul>
				</div>
				
				 <button class="btn btn-success" type="submit" style="width:100%;">Submit</button>
				 
				</div>
			  </div>
			  
				
				</div>
					</div>
@endsection