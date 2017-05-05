@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>Current single group</h1>
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
			<div class="col-md-6">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h4 class="box-title">A1 Beginner</h4>
					</div>
					<div class="box-body">
						<h3>Adult beginner group</h3>
						<table class="table table-bordered">
							<tr>
								<td>Start date</td>
								<td>01/01/2017</td>
							</tr>
							<tr>
								<td>End Date</td>
								<td>01/05/2017</td>
							</tr>
							<tr>
								<td>Average score</td>
								<td>85.3</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- Line CHART-->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Line Chart</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<p>Chart is coming soon</p>
							<canvas id="lineCharts" style="height:250px;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-primary"><a class="white-link" href="teacher-single.html">
							<h3 class="widget-user-username">Elma Wild</h3></a>
						<h5 class="widget-user-desc">Junior English Teacher</h5>
					</div>
					<div class="widget-user-image"><img class="img-circle" src="img/user1-128x128.jpg" alt="User Avatar"></div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">2</h5><span class="description-text">Groups</span>
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
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Course students</h3>
						<div class="box-tools pull-right"><span class="label label-success">8 Students</span>
							<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body no-padding">
						<ul class="users-list clearfix">
							<li><img src="/admin/img/user1-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Alexander Pierce</a></li>
							<li><img src="/admin/img/user8-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Norman</a></li>
							<li><img src="/admin/img/user7-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Jane</a></li>
							<li><img src="/admin/img/user6-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">John</a></li>
							<li><img src="/admin/img/user2-160x160.jpg" alt="User Image"><a class="users-list-name" href="#">Alexander</a></li>
							<li><img src="/admin/img/user5-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Sarah</a></li>
							<li><img src="/admin/img/user4-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Nora</a></li>
							<li><img src="/admin/img/user3-128x128.jpg" alt="User Image"><a class="users-list-name" href="#">Nadia</a></li>
						</ul>
					</div>
					<div class="box-footer text-center"><a class="uppercase">View All Students</a></div>
				</div>
			</div>
		</div>
	</section>
@endsection