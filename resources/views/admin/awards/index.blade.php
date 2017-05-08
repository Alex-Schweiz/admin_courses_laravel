@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Awards</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>
	<section class="content row">
		<div class="col-md-8">
			<div class="box box-solid box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Payments by award</h3>
				</div>
				<div class="box-body">
					<table class="table table-bordered">
						<tr>
							<th style="width: 20px;">id</th>
							<th>Name</th>
							<th>Teacher's name</th>
							<th>Amount</th>
							<th>Date of award</th>
						</tr>
						@foreach($awards as $award)
							<tr>
								<td>{{$award->id}}</td>
								<td>{{$award->name}}</td>
								<td>
									<a href="/admin/teachers/{{$award->teacher->id}}">{{$award->teacher->name}}</a>
								</td>
								<td>$ {{$award->reward}}</td>
								<td>{{$award->date}}</td>
							</tr>
						@endforeach
					</table>
				</div>
	</section>
@endsection