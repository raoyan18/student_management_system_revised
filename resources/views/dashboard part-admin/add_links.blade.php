@extends('layouts.admin_base')
@section('admin_content')

<!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<h3>Add links</h3>
			  <div class="row" style="margin-top:20px;">

			  <div class="col-sm-9">
				  <form action="/links/update" method="post">

					  {{ csrf_field() }}

			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Facebook:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="link_facebook" name="link_facebook" placeholder="facebook link here" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Twitter:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="link_twitter" name="link_twitter" placeholder="twitter link here" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Google plus:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="link_google_plus" name="link_google_plus" placeholder="google+ link here" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Linkedin:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="link_linkedin" name="link_linkedin" placeholder="linkedin link here" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
				<div class="col-sm-4 form-group">
				  <h4>Youtube:</h4>
				</div>
				<div class="col-sm-8 form-group">
				  <input class="form-control" id="link_youtube" name="link_youtube" placeholder="youtube link here" type="text" required>
				</div>
			  </div> 
			  
			  <div class="row">
			  <button class="btn btn-primary pull-right" type="submit" style="margin-right:15px;"> Submit </button>
			  </div>
			  
			  
			  <p class="notice"> *These links will be added to the social icons at your page's footer.</p>
				  </form>
		
			  </div>
			  <div class="col-sm-3 form-group">
				</div>
			  </div>
			  
				
				</div>
					</div>
@endsection