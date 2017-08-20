@extends('layouts.admin_base')
@section('admin_content')

<!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<h3>Add links</h3>
			  <div class="row" style="margin-top:20px;">

			  <div class="col-sm-10">
				  <form action="/admin/home" method="post" enctype="multipart/form-data">
					  {{ csrf_field() }}

						  <div class="row">
							<div class="col-sm-4 form-group">
							  <h4>About:</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <textarea class="form-control" rows="3" id="home_about" name="home_about" placeholder="some words for about section" type="text" required></textarea>
							</div>
						  </div>

						  <div class="row">
							<div class="col-sm-4 form-group">
							  <h4>A few words:</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <textarea class="form-control" rows="3" id="home_words" name="home_words" placeholder="some words for a few words section" type="text" required></textarea>
							</div>
						  </div>

						  <div class="row">
							<div class="col-sm-4 form-group">
							  <h4>Students under project:</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <textarea class="form-control" rows="3" id="home_project" name="home_project" placeholder="some words for project students" type="text" required></textarea>
							</div>
						  </div>

						  <div class="row">
							<div class="col-sm-4 form-group">
							  <h4>Students under Advise:</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <textarea class="form-control" rows="3" id="home_advise" name="home_advise" placeholder="some words for students under advise" type="text" required></textarea>
							</div>
						  </div>

						  <div class="row">
							<div class="col-sm-4 form-group">
							  <h4>1st Image:</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <input class="form-control" id="home_image_1" name="home_image_1" placeholder="youtube link here" type="file" required>
							</div>
						  </div>

						  <div class="row">
								<div class="col-sm-4 form-group">
									 <h4>2nd Image:</h4>
								</div>
								<div class="col-sm-8 form-group">
									 <input class="form-control" id="home_image_2" name="home_image_2" placeholder="youtube link here" type="file" required>
								</div>
						  </div>

						  <div class="row">
								 <button class="btn btn-primary pull-right" type="submit" style="margin-right:15px;"> Submit </button>
						  </div>


						  <p class="notice"> *These information will be added to your homepage.</p>
				  </form>
		
			  </div>
			  		<div class="col-sm-2 form-group">
					</div>
			  </div>
			  
				
				</div>
				</div>
@endsection