@extends('layouts.student_base')
@section('student_content')


		<!-- Main content-->
				<div class="col-xs-10 content">
					@if (session('status'))
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true">
								&times;
							</button>
							{{ session('status') }}
						</div>

					@endif
					@if (session('failed'))
						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true">
								&times;
							</button>
							{{ session('failed') }}
						</div>

					@endif
				<h3> Save Remark</h3>
					<form action="/remarks/save" method="post">

						{{ csrf_field() }}
						<div class="form-group student_form_div">
							<div class="row">
								<input type="hidden"  name="remarks_user_id_fkey" value ="{{Auth::user()->id}}">
							<b class="col-xs-2">Remark title:</b> <input type="text" class="col-xs-10" name="remarks_title" id="title" placeholder="message title"><br><br>
							</div>
							<div class="row">
								<b class="col-xs-2">Remark date:</b> <input type="date" class="col-xs-10" name="remarks_date" id="date"><br><br>
							</div>
							<textarea rows="8" cols="146" id="description" name="remarks_description" placeholder="remark description"></textarea>

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