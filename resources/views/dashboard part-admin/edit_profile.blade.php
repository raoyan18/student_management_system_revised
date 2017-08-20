@extends('layouts.admin_base')
@section('admin_content')
				
				 <!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
					<h3>Edit Profile</h3>
						<form action="/admin/profile" method="post"  enctype="multipart/form-data">

							{{ csrf_field() }}
							  <div class="row">
							  <div class="col-sm-9">
							  <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Name:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="name" name="admin_name" placeholder="Name" type="text">
									</div>
							  </div>

							  <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>New Password:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="password" name="admin_password" placeholder="Password" type="password">
									</div>
							  </div>

							  <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Email:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="mail" name="admin_email" placeholder="email" type="email">
									</div>
							  </div>

							 <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Designation:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="designation" name="admin_designation" placeholder="Designation" type="text">
									</div>
							  </div>

							 <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Institution:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="institution" name="admin_institution" placeholder="institution" type="text">
									</div>
							  </div>

							 <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Cell:</h4>
									</div>
									<div class="col-sm-8 form-group">
									  <input class="form-control" id="cell" name="iadmin_cell" placeholder="cell" type="text">
									</div>
							  </div>

							   <!-- Right side image showing portion-->
							  <div class="row">
									<div class="col-sm-4 form-group">
									  <h4>Add a photo</h4>
									</div>
									<div class="col-sm-8 form-group">
										<!--<input id="a" name="a" placeholder="Add a photo" type="file">-->
										<input id="admin_propic" name="admin_propic" placeholder="Add photo link" type="file">
									</div>
							  </div>

						   <p class="notice"> *Check twice before completing editing profile. Having trouble with editing profile? Forgot password? <a href="">click here</a></p>

						  </div>
						  <div class="col-sm-3 form-group">
						  <img src="{{asset('admin/img/bene.jpg')}}" class="img-responsive">
							  <button class="btn btn-success" type="submit" style="width:100%; margin-top:15px;">Update</button>
							</div>
						  </div>
					</form>
				
				</div>

			</div>

@endsection