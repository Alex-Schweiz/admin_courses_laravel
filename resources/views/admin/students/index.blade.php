@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Students</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">User profile</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header">
						<h3 class="box-title">Students list</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-striped" id="students_list">
							<thead>
							<tr>
								<th>Student id</th>
								<th>Name</th>
								<th>Group</th>
								<th>Department</th>
								<th>Date of join</th>
							</tr>
							</thead>
							<tbody>
							@foreach($students as $student)
								<tr>
									<td>{{$student->id}}</td>
									<td><a href="students-single.html">
											<p>{{$student->name}}</p></a></td>
									<td>A2 Beginner</td>
									<td>English</td>
									<td>12/04/2017</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection