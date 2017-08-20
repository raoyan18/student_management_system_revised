@extends('layouts.student_base')
@section('student_content')

	<!-- Main content-->
	<div class="col-xs-10 content">
		<div class="row" style="margin-bottom:10px; border-bottom:1px dashed #ddd;">
			<div class="col-xs-7">
				@foreach($student as $user)
				<h3>{{$user['student_name']}} ({{$user['student_roll']}})</h3>
				<i class="fa fa-envelope" aria-hidden="true"></i> {{$user['student_email']}} | <i class="fa fa-phone" aria-hidden="true"></i> {{$user['student_cell']}}
				<br>&nbsp;
				<b>Present address:</b> {{$user['student_present_address']}}
			</div>

			<div class="col-xs-5" style="border-left:1px solid #ddd; padding-left: 44px; margin-bottom:5px;">
				<h3>{{$user['student_guardian_name']}}</h3>
				<i class="fa fa-envelope" aria-hidden="true"></i> {{$user['student_guardian_email']}} | <i class="fa fa-phone" aria-hidden="true"></i> {{$user['student_guardian_email']}}
				<br>&nbsp;
				<b>Permanent address:</b> {{$user['student_permanent_address']}}

			</div>
			&nbsp; &nbsp;&nbsp;&nbsp;
			<b>Achievements:</b> {{$user['student_achievement']}}
			<br><br>

		</div>
		@if($user['student_approved']==0)
			<div class="alert alert-success alert-dismissable">

				</button>
				"Your account is need to be approved!!"
			</div>


		@else
		<div class="cat">
			<div class="row">
				<div class="col-sm-7">
					<h3>Notice</h3>

					<ul class="inbox">
						@foreach($notice as $value_not)
						<li class="unread"><a href="#msg_{{$value_not['id']}}" data-toggle="modal" data-target="#msg_{{$value_not['id']}}">{{$value_not['notification_title']}}</a></li>

					   @endforeach
					</ul>

				@foreach($notice as $value_not)
					<!--MODAL-->
					<div id="msg_{{$value_not['id']}}" class="modal fade " role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>

									<h4 class="modal-title black1">{{$value_not['notification_title']}}</h4>
								</div>
								<div class="modal-body">

									<p>{{$value_not['notification_details']}}</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
					@endforeach


				</div>

				<!-- Right side message info showing and delete option providing portion-->
				<div class="col-sm-5" style="padding-left:40px;">
					<h3>Last Remarks</h3>
					@foreach($remarks as $value_re)
					<div class="panel panel-default">
						<div class="panel-heading">Remarks Title:</div>
						<div class="panel-body">{{$value_re['remarks_title']}}</div>
						<div class="panel-heading">Date:</div>
						<div class="panel-body">{{$value_re['remarks_date']}}</div>
						<div class="panel-heading">Description:</div>
						<div class="panel-body">{{$value_re['remarks_description']}}</div>
					</div>
					@endforeach
				</div>
			</div>
			@endif
			<p style="margin-top:75px; float:right; color:#aaa">Developed by <a href="http://resoftbd.com">Resoft</a></p>
		</div>


	</div>

	@endforeach
@endsection