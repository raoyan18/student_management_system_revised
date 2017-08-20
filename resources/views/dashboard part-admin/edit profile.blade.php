@extends('layouts.admin_base')
@section('admin_content')
				
				 <!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<h3>Edit Profile</h3>
			  <div class="row">
			  <div class="col-sm-9">
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
				  <h4>Old Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>New Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="re-pass" name="re-pass" placeholder="Password" type="password" required>
				</div>
			  </div> 
			 <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Re-enter New Password:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="pass-re" name="pass-re" placeholder="password" type="password" required>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Email:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="mail" name="mail" placeholder="email" type="email">
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
			  
			   <!-- Right side image showing portion-->
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Add a photo</h4>
				</div>
				<div class="col-sm-8 form-group">
					<input id="a" name="a" placeholder="Add a photo" type="file">
			    </div>
			  </div>
			  
			   <p class="notice"> *Check twice before completing editing profile. Having trouble with editing profile? Forgot password? <a href="">click here</a></p>
			 
			  </div>
			  <div class="col-sm-3 form-group">
			  <img src="{{asset('admin/img/bene.jpg')}}" class="img-responsive">
				  <button class="btn btn-success" type="submit" style="width:100%; margin-top:15px;">Update</button>
				</div>
			  </div>
			  
				
				</div>
@endsection