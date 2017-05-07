@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Add a new group</h1>
	</section>
	<section class="content">
		<form method="POST" action="/admin/current-groups">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="group_name">Name:</label>
				<input class="form-control" id="group_name" placeholder="Enter group name" name="group_name">
			</div>
			<div class="form-group">
				<label for="group_type">Group Type:</label>
				<select class="form-control" id="group_type" name="group_type">
					<option value="Adult group">Adult group</option>
					<option value="Kinds group">Kinds group</option>
					<option value="Intensive course">Intensive course</option>
					<option value="Speaking club">Speaking club</option>
				</select>
			</div>
			<div class="form-group">
				<label for="department">Department:</label>
				<select class="form-control" id="department" name="department">
					<option value="English Language">English Language</option>
					<option value="German club">German Language</option>
					<option value="French club">French Language</option>
				</select>
			</div>
			<div class="form-group">
				<label for="start_date">Start Date:</label>
				<input class="form-control" id="start_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="start_date" type="text">
			</div>
			<div class="form-group">
				<label for="finish_date">End Date:</label>
				<input class="form-control" id="finish_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="finish_date" type="text">
			</div>
			<button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
		</form>
	</section>
@endsection