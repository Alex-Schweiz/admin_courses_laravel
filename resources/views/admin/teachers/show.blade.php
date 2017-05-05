@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>Single Teacher Page</h1>
		</div>
		<div class="col-md-2 col-md-offset-7">
			<button class="btn btn-primary edit-one" type="button" data-toggle="modal" data-target="#myModal"><a class="white-link" href="#"><i class="fa fa-pencil"></i> Edit teacher</a></button>
			<!-- Modal-->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" type="button" data-dismiss="modal">×</button>
							<h3 class="modal-title">Edit Nina Mcintire info</h3>
						</div>
						<div class="modal-body">
							<form>
								<h3>Personal info</h3>
								<div class="form-group">
									<label for="name">Name:</label>
									<input class="form-control" id="name" placeholder="Enter name" name="name">
								</div>
								<div class="form-group">
									<label for="dateOfBirth">Date of Birth:</label>
									<input class="form-control" id="dateOfBirth" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="dateOfBirth" type="text">
								</div>
								<div class="form-group">
									<label for="gender">Gender:</label>
									<select class="form-control" id="gender" name="gender">
										<option>Female</option>
										<option>Male</option>
									</select>
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input class="form-control" id="email" placeholder="Enter email" name="email" type="email">
								</div>
								<div class="form-group">
									<label for="phone">Phone:</label>
									<input class="form-control" id="phone" placeholder="Enter phone" name="phone">
								</div>
								<div class="form-group">
									<label for="address">Address:</label>
									<input class="form-control" id="address" placeholder="Enter address" name="address">
								</div>
								<h3>Professional info</h3>
								<div class="form-group">
									<label for="department">Department:</label>
									<select class="form-control" id="department" name="department">
										<option>English Language</option>
										<option>German Language</option>
										<option>French Language</option>
									</select>
								</div>
								<div class="form-group">
									<label for="designation">Designation:</label>
									<input class="form-control" id="designation" placeholder="Enter designation" name="designation">
								</div>
								<div class="form-group">
									<label for="dateOfJoining">Date of joining:</label>
									<input class="form-control" id="dateOfJoining" name="dateOfJoining">
									<label for="salary">Salary:</label>
									<input class="form-control" id="salary" placeholder="Enter salary" name="salary">
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
					<div class="box-body box-profile"><img class="profile-user-img img-responsive img-circle" src="/admin/img/user1-128x128.jpg" alt="User profile picture">
						<h3 class="profile-username text-center">Nina Mcintire</h3>
						<p class="text-muted text-center">Software Engineer</p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item"><b>Groups</b><a class="pull-right">2</a></li>
							<li class="list-group-item"><b>Students</b><a class="pull-right">25</a></li>
							<li class="list-group-item"><b>Months working</b><a class="pull-right">2</a></li>
						</ul>
					</div>
				</div>
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Skills and interests</h3>
					</div>
					<div class="box-body">
						<p><span class="label label-danger">UI Design</span><span class="label label-success">Coding</span><span class="label label-info">Javascript</span><span class="label label-warning">PHP</span><span class="label label-primary">Node.js</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Personal info</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<td>Name</td>
								<td>Alicia Keys</td>
							</tr>
							<tr>
								<td>Date of birth</td>
								<td>21/03/1992</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Female</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>sdasdad@mail.com</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>+38-095-24-24</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>21 Down Street, London</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Professional info</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<td>Personal ID</td>
								<td>001</td>
							</tr>
							<tr>
								<td>Department</td>
								<td>Teachers</td>
							</tr>
							<tr>
								<td>Designation</td>
								<td>Junior English teacher</td>
							</tr>
							<tr>
								<td>Date of joining</td>
								<td>15/01/2017</td>
							</tr>
							<tr>
								<td>Salary</td>
								<td>$150</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Current groups</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th>Group id</th>
								<th>Name</th>
								<th>Start date</th>
								<th>Finish date</th>
							</tr>
							<tr>
								<td>001</td>
								<td>A1 Beginner</td>
								<td>01/01/2017</td>
								<td>01/05/2017</td>
							</tr>
							<tr>
								<td>002</td>
								<td>A2 Intensive</td>
								<td>01/02/2017</td>
								<td>01/06/2017</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Awards</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th>Name</th>
								<th>Prise</th>
							</tr>
							<tr>
								<td>Teacher of the month 04/2017</td>
								<td>$50</td>
							</tr>
							<tr>
								<td>Famous person</td>
								<td>$40</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection