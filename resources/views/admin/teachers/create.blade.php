@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Add a new teacher</h1>
	</section>
	<section class="content">
		<form method="POST" action="/admin/teachers">
			{{ csrf_field() }}
			<h3>Personal info</h3>
			<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" id="name" placeholder="Enter name" name="name">
			</div>
			<div class="form-group">
				<label for="date_of_birth">Date of Birth:</label>
				<input class="form-control" id="date_of_birth" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="date_of_birth" type="text">
			</div>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" id="gender" name="gender">
					<option value="0">Female</option>
					<option value="1">Male</option>
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
			<div class = "form-group">
				<label for="notes">Notes</label>
				<textarea class = "form-control" rows = "3" id="notes" name="notes"></textarea>
			</div>
			<h3>Professional info</h3>
			<div class="form-group">
				<label for="department">Department:</label>
				<select class="form-control" id="department" name="department">
					<option value="English Language">English Language</option>
					<option value="German Language">German Language</option>
					<option value="French Language">French Language</option>
				</select>
			</div>
			<div class="form-group">
				<label for="occupation">Occupation:</label>
				<input class="form-control" id="occupation" placeholder="Enter designation" name="occupation">
			</div>
			<div class="form-group">
				<label for="date_of_joining">Date of joining:</label>
				<input class="form-control" id="date_of_joining" name="date_of_joining">
				<label for="salary">Salary:</label>
				<input class="form-control" id="salary" placeholder="Enter salary" name="salary">
			</div>
			<button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
		</form>
		<hr>
		@include('admin.includes.form-error')
	</section>
@endsection