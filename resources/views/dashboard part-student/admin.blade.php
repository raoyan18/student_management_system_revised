@extends('layouts.student_base')
@section('student_content')


<!-- Main content-->
				<div class="col-xs-10 content">

						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true">
								&times;
							</button>
							Please complete your profile to be approved!!
						</div>



				<h3> Dashboard</h3>
					<form class="form-horizontal" role="form" method="POST" action="completeProfile" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group row student_form_div">
							<label for="name" class="col-xs-4">Name:</label>
							<input class="col-xs-8" type="hidden" id="email" name="student_name" value="{{Auth::user()->name}}">
							<label for="email" class="col-xs-4">{{Auth::user()->name}}</label>
						</div>
						<div class="form-group row student_form_div">
							<label for="id" class="col-xs-4">ID:</label>
							<input class="col-xs-8" type="text" id="id" name="student_roll" placeholder="student id">
						</div>
						<div class="form-group row student_form_div">
							<label for="id" class="col-xs-4">ID:</label>
							<input class="col-xs-8" type="file" id="id" name="student_photo" placeholder="student id">
						</div>
						<div class="form-group row student_form_div">
							<label for="email" class="col-xs-4">Email:</label>
							<input class="col-xs-8" type="hidden" id="email" name="student_email" value="{{Auth::user()->email}}">
							<label for="email" class="col-xs-4">{{Auth::user()->email}}</label>
						</div>
                        <label class="checkbox-inline"><input type="checkbox" name="student_adviser_supervisor[]" value="Adviser">Adviser</label>
                        <label class="checkbox-inline"><input type="checkbox" name="student_adviser_supervisor[]" value="Supervisor">Supervisor</label>
						<div class="form-group row student_form_div">
							<label for="cell" class="col-xs-4">Cell:</label>
							<input class="col-xs-8" type="text" id="cell" name="student_cell" placeholder="cell number">
						</div>
						<div class="form-group row student_form_div">
							<label for="gname" class="col-xs-4">Guardian's Name:</label>
							<input class="col-xs-8" type="text" id="gname" name="student_guardian_name" placeholder="guardian's full name">
						</div>
						<div class="form-group row student_form_div">
							<label for="gmail" class="col-xs-4">Guardian's Email:</label>
							<input class="col-xs-8" type="text" id="gmail" name="student_guardian_email" placeholder="guardian's mail">
						</div>
						<div class="form-group row student_form_div">
							<label for="gcell" class="col-xs-4">Guardian's Cell:</label>
							<input class="col-xs-8" type="text" id="gcell" name="student_guardian_cell" placeholder="guardian's cell">
						</div>
						<div class="form-group row student_form_div">
							<label for="pres_add" class="col-xs-4">Present Address:</label>
							<input class="col-xs-8" type="text" id="pres_add" name="student_present_address" placeholder="present address">
						</div>
						<div class="form-group row student_form_div">
							<label for="perm_add" class="col-xs-4">Permanent Address:</label>
							<input class="col-xs-8" type="text" id="perm_add" name="student_permanent_address" placeholder="permanent address">
						</div>
						<div class="form-group row student_form_div">
							<label for="achievements" class="col-xs-4">Achievements:</label>
							<input class="col-xs-8" type="text" id="achievements" name="student_achievement" placeholder="achievements">
						</div>
						<br>

						<div class="form-group">
							 <button class="btn btn-primary pull-right" type="submit" name="submit"> Submit </button>
						</div>

					</form>
					<p style="margin-top:75px; float:right; color:#aaa">Developed by <a href="http://resoftbd.com">Resoft</a></p>
				</div>


		</div>
@endsection