@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h3>{{$student->name}}</h3>
		</div>
		<div class="col-md-2 col-md-offset-7">
			<button class="btn btn-primary edit-one" type="button" data-toggle="modal" data-target="#myModal"><a class="white-link" href="#"><i class="fa fa-pencil"></i> Edit student</a></button>
		</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<!-- Profile Image-->
				<div class="box box-primary">
					<div class="box-body box-profile"><img class="profile-user-img img-responsive img-circle" src="{{$student->photo}}" alt="User profile picture">
						<h3 class="profile-username text-center">{{$student->name}}</h3>
						<p class="text-muted text-center">A1 Kids group</p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item"><b>Followers</b><a class="pull-right">12</a></li>
						</ul>
					</div>
				</div>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">About Me</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<td>Date of birth</td>
								<td>{{$student->date_of_birth}}</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>{{$student->gender}}</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>{{$student->email}}</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>{{$student->phone}}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>{{$student->address}}</td>
							</tr>
						</table>
						<hr><strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
						<p>{{$student->notes}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#progress" data-toggle="tab">Progress</a></li>
						<li><a href="#timeline" data-toggle="tab">Timeline</a></li>
						<li><a href="#homework" data-toggle="tab">Homework</a></li>
						<li><a href="#scores" data-toggle="tab">Scores</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="progress">
							<div class="box box-info">
								<div class="box-header with-border">
									<h3 class="box-title">Line Chart</h3>
									<div class="box-tools pull-right">
										<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body">
									<div class="chart">
										<canvas id="lineChart" style="height:350px;"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="timeline">
							<ul class="timeline timeline-inverse">
								<li class="time-label"><span class="bg-red">10 Feb. 2014</span></li>
								<li><i class="fa fa-user bg-aqua"></i>
									<div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
										<h3 class="timeline-header no-border"><a href="#">A1 Kids group</a> Got 80/100 for control work</h3>
									</div>
								</li>
								<!-- END timeline item-->
								<!-- timeline item-->
								<li><i class="fa fa-comments bg-yellow"></i>
									<div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
										<h3 class="timeline-header"><a href="#">A1 Kids group</a> New homework</h3>
										<div class="timeline-body">
											<p>LP p.12 ex.14, SB p.20 ex.18</p>
											<p>Prepare words from 1st module</p>
										</div>
									</div>
								</li>
								<!-- END timeline item-->
								<!-- timeline time label-->
								<li class="time-label"><span class="bg-green">3 Jan. 2014</span></li>
								<!-- /.timeline-label-->
								<!-- timeline item-->
								<li><i class="fa fa-comments bg-yellow"></i>
									<div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
										<h3 class="timeline-header"><a href="#">A1 Kids group</a> New homework</h3>
										<div class="timeline-body">
											<p>LP p.12 ex.14, SB p.20 ex.18</p>
											<p>Prepare words from 1st module</p>
										</div>
									</div>
								</li>
								<!-- END timeline item-->
								<li><i class="fa fa-clock-o bg-gray"></i></li>
							</ul>
						</div>
						<div class="tab-pane" id="homework">
							<div class="box">
								<div class="box-header">
									<div class="box-tools pull-right">
										<ul class="pagination pagination-sm inline">
											<li><a href="#">«</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">»</a></li>
										</ul>
									</div>
								</div>
								<!-- /.box-header-->
								<div class="box-body">
									<ul class="todo-list">
										<li>
											<!-- drag handle--><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<!-- checkbox-->
											<input type="checkbox" value="">
											<span class="text">Design a nice theme</span>
											<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
										<li><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<input type="checkbox" value=""><span class="text">Make the theme responsive</span><small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
										<li><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<input type="checkbox" value=""><span class="text">Let theme shine like a star</span><small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
										<li><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<input type="checkbox" value=""><span class="text">Let theme shine like a star</span><small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
										<li><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<input type="checkbox" value=""><span class="text">Check your messages and notifications</span><small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
										<li><span class="handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>
											<input type="checkbox" value=""><span class="text">Let theme shine like a star</span><small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
											<div class="tools"><i class="fa fa-edit"></i><i class="fa fa-trash-o"></i></div>
										</li>
									</ul>
								</div>
								<!-- /.box-body-->
								<div class="box-footer clearfix no-border">
									<button class="btn btn-default pull-right" type="button"><i class="fa fa-plus"></i> Add item</button>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="scores">
							<div class="box">
								<div class="box-header">
								</div>
								<div class="box-body">
									<table class="table table-bordered">
										<tr>
											<th># <span style="display: none" class="hiddenData" id="labelData">{{$id}}</span></th>
											<th>Score <span style="display: none" class="hiddenData" id="dataSetData">{{$score}}</span></th>
										</tr>
										@foreach($student->scores as $score)
											<tr>
												<td>{{$score->id}}</td>
												<td>{{$score->score}}</td>
											</tr>
										@endforeach
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
