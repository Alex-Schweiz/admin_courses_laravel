@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>{{$current_group->group_type}}</h1>
		</div>
		<div class="col-md-2 col-md-offset-7">
			<button class="btn btn-primary edit-one" type="button" data-toggle="modal" data-target="#groupModal"><a class="white-link" href="#"><i class="fa fa-pencil"></i> Edit a group</a></button>
			<!-- Modal-->
			<div class="modal fade" id="groupModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" type="button" data-dismiss="modal">×</button>
							<h3 class="modal-title">Edit Current Group</h3>
						</div>
						<div class="modal-body">
							<form>
								<h3>Personal info</h3>
								<div class="form-group">
									<label for="groupName">Name:</label>
									<input class="form-control" id="groupName" placeholder="Enter group name" name="groupName">
								</div>
								<div class="form-group">
									<label for="groupType">Group Type:</label>
									<select class="form-control" id="groupType" name="groupType">
										<option>Adult group</option>
										<option>Kinds group</option>
										<option>Intensive course</option>
										<option>Speaking club</option>
									</select>
								</div>
								<div class="form-group">
									<label for="department">Department:</label>
									<select class="form-control" id="department" name="department">
										<option>English Language</option>
										<option>German Language</option>
										<option>French Language</option>
									</select>
								</div>
								<div class="form-group">
									<label for="startDate">Start Date:</label>
									<input class="form-control" id="startDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="startDate" type="text">
								</div>
								<div class="form-group">
									<label for="endDate">End Date:</label>
									<input class="form-control" id="endDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="endDate" type="text">
								</div>
								<button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
							</form>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">{{$current_group->group_level}}  {{$current_group->group_type}}</h4>
					</div>
					<div class="box-body">
						<h3>Adult beginner group</h3>
						<table class="table table-bordered">
							<tr>
								<td>Start date</td>
								<td>{{$current_group->start_date}}</td>
							</tr>
							<tr>
								<td>End Date</td>
								<td>{{$current_group->finish_date}}</td>
							</tr>
							<tr>
								<td>Average score</td>
								<td>85.3</td>
							</tr>
						</table>
					</div>
				</div>
				<h2>Group teacher</h2>
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-primary"><a class="white-link" href="/admin/teachers/{{$current_group->teacher->id}}">
							<h3 class="widget-user-username">{{$current_group->teacher->name}}</h3></a>
						<h5 class="widget-user-desc">{{$current_group->teacher->occupation}}</h5>
					</div>
					<div class="widget-user-image"><img class="img-circle" src="{{$current_group->teacher->photo}}" alt="User Avatar"></div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">{{$current_group->teacher->current_groups()->count()}}</h5><span class="description-text">Groups</span>
								</div>
							</div>
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">25</h5><span class="description-text">Students</span>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="description-block">
									<h5 class="description-header">2</h5><span class="description-text">Months working</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#progress" data-toggle="tab">Progress</a></li>
						<li><a href="#students" data-toggle="tab">Students</a></li>
						<li><a href="#homework" data-toggle="tab">Homework</a></li>
						<li><a href="#classroom-tasks" data-toggle="tab">Classroom Tasks</a></li>
						<li><a href="#results-table" data-toggle="tab">Results table</a></li>
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
										<canvas id="lineChart" style="height:300px;"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="students">
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Course students</h3>
									<div class="box-tools pull-right"><span class="label label-success">{{$current_group->students->count()}} Students</span>
										<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body no-padding">
									<ul class="users-list clearfix">
										@foreach($current_group->students as $student)
											<li><img src="{{$student->photo}}" alt="User Image"><a class="users-list-name" href="/admin/students/{{$student->id}}">{{$student->name}}</a></li>
										@endforeach
									</ul>
								</div>
								<div class="box-footer text-center"><a class="uppercase">View All Students</a></div>
							</div>
						</div>
						<div class="tab-pane" id="homework">
							<table class="table table-bordered">
								<tr>
									<th>#</th>
									<th>Due date</th>
									<th>Task</th>
								</tr>
								@foreach($current_group->current_homework as $homework)
									<tr>
										<td>{{$homework->id}}</td>
										<td>{{$homework->due_date}}</td>
										<td>{{$homework->task}}</td>
									</tr>
								@endforeach
							</table>
						</div>
						<div class="tab-pane" id="classroom-tasks">
							<table class="table table-bordered">
								<tr>
									<th>#</th>
									<th>Date</th>
									<th>Task</th>
								</tr>
								@foreach($current_group->current_group_tasks as $homework)
									<tr>
										<td>{{$homework->id}}</td>
										<td>{{$homework->due_date}}</td>
										<td>{{$homework->task}}</td>
									</tr>
								@endforeach
							</table>
						</div>
						<div class="tab-pane" id="results-table">
							<table class="table table-striped">
								<tr>
									<th>Name</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>6</th>
									<th>7</th>
									<th>8</th>
									<th>9</th>
									<th>10</th>
									<th>Exam</th>
									<th>AVG</th>
								</tr>
								@foreach($current_group->students as $student)
									<tr>
										<td>#{{$student->id }} {{$student->name}}</td>
										<td>70</td>
										<td>75</td>
										<td>35</td>
										<td>15</td>
										<td>15</td>
										<td>80</td>
										<td>80</td>
										<td>80</td>
										<td>80</td>
										<td>80</td>
										<td>80</td>
										<td>73.8</td>
									</tr>
								@endforeach
								<tr>
									<td>Eddie Murphy</td>
									<td>70</td>
									<td>75</td>
									<td>35</td>
									<td>15</td>
									<td>15</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>73.8</td>
								</tr>
								<tr>
									<td>Eddie Murphy</td>
									<td>70</td>
									<td>75</td>
									<td>35</td>
									<td>15</td>
									<td>15</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>80</td>
									<td>73.8</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection