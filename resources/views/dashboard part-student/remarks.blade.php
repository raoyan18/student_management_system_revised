@extends('layouts.student_base')
@section('student_content')


		<!-- Main content-->
				<div class="col-xs-10 content">
				<div class="cat">
				<div class="row">
				<div class="col-sm-9">
					<h3>Remarks</h3>
				
						<ul class="inbox">
							@foreach($data as $remarks)
							<li class="unread"><a href="#msg_{{$remarks['remarks_id']}}" data-toggle="modal" data-target="#msg{{$remarks['remarks_id']}}">{{$remarks['remarks_title']}}</a></li>

							@endforeach
						</ul>
				           @foreach($data as $remarks)
							<!--MODAL-->
							<div id="msg{{$remarks['remarks_id']}}" class="modal fade " role="dialog">
							  <div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									
									<h4 class="modal-title black1">{{$remarks['remarks_title']}}</h4>
								  </div>
								  <div class="modal-body">
								    <b>Date: {{$remarks['remarks_date']}}</b><br><br>
									<p>{{$remarks['remarks_description']}}</p>
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