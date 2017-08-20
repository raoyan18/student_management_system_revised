@extends('layouts.student_base')
@section('student_content')


		<!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<div class="row">
				<div class="col-sm-12">
					<h3>Notice</h3>
				
						<ul class="inbox">
							@foreach ($data as $notice)

								<li class="unread"><a href="#msg_{{$notice['id']}}" data-toggle="modal" data-target="#msg_{{$notice['id']}}">{{$notice['notification_title']}}</a></li>


							@endforeach
								</ul>
				@foreach ($data as $notice)
							<!--MODAL-->
							<div id="msg_{{$notice['id']}}" class="modal fade " role="dialog">
							  <div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									
									<h4 class="modal-title black1">{{$notice['notification_title']}}</h4>
								  </div>
								  <div class="modal-body">

									<p>{{$notice['notification_details']}}</p>
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

						</div>
				</div>
					</div>
		@endsection