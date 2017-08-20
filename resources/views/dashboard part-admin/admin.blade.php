@extends('layouts.admin_base')
@section('admin_content')

		<!-- Main content-->
				<div class="col-xs-10 content">
				<h3> Dashboard</h3>
					<div class="row">
						<div class="col-xs-3 text-center">
							<div class="stat-a" style=" background:#00c0ef">
								<h2>41</h2>
								<h4>Total Students Under Project</h4>
							</div>
						</div>
						<div class="col-xs-3 text-center">
							<div class="stat-a" style=" background:#00a65a">
								<h2>15</h2>
								<h4>Total Students Under Advise</h4>
							</div>
						</div>
						<div class="col-xs-3 text-center">
							<div class="stat-a" style=" background:#f39c12">
								<h2>6</h2>
								<h4>New Students Under Project</h4>
							</div>
						</div>
						<div class="col-xs-3 text-center">
							<div class="stat-a" style=" background:#de4b39">
								<h2>2</h2>
								<h4>New Students Under Advise</h4>
							</div>
						</div>
					</div>



					<div class="row" style="margin-top:40px;">
						<div class="col-xs-6">
							<h3 style="margin-left:0px;">Students under project (Batch wise)</h3>
							'11 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" role="progressbar" style="width:40%">40 Students</div>
							</div>
							'12 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped  progress-bar-danger active" role="progressbar" style="width:50%">50 Students</div>
							</div>
							'13 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped  progress-bar-success active" role="progressbar" style="width:55%">55 Students</div>
							</div>
							'14 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped  progress-bar-info active" role="progressbar" style="width:57%">57 Students</div>
							</div>
							'15 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped  progress-bar-warning active" role="progressbar" style="width:69%">69 Students</div>
							</div>
							'16 Batch:
							<div class="progress">
								<div class="progress-bar progress-bar-striped  progress-bar-warning active" role="progressbar" style="width:69%">90 Students</div>
							</div>
						</div>
					<div class="col-xs-6">
					<h3 style="margin-left:0px;">Students under Advise (Batch wise)</h3>
						'11 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" role="progressbar" style="width:40%">40 Students</div>
						</div>
						'12 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped  progress-bar-danger active" role="progressbar" style="width:50%">50 Students</div>
						</div>
						'13 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped  progress-bar-success active" role="progressbar" style="width:55%">55 Students</div>
						</div>
						'14 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped  progress-bar-info active" role="progressbar" style="width:57%">57 Students</div>
						</div>
						'15 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped  progress-bar-warning active" role="progressbar" style="width:69%">69 Students</div>
						</div>
						'16 Batch:
						<div class="progress">
							<div class="progress-bar progress-bar-striped  progress-bar-warning active" role="progressbar" style="width:69%">90 Students</div>
						</div>
						<p style="margin-top:75px; float:right; color:#aaa">Developed by Resoft</p>
					</div>
				</div>

		</div>
@endsection