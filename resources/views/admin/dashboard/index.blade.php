@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Welcome to English courses dashboard<small>Optional description</small></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			<li class="active">Here</li>
		</ol>
	</section>
	<section class="content row">
		<div class="col-md-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3>8</h3>
					<p>Current Courses</p>
				</div>
				<div class="icon"><i class="fa fa-graduation-cap"></i></div><a class="small-box-footer" href="current-groups.html">More info<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3>85</h3>
					<p>Students</p>
				</div>
				<div class="icon"><i class="fa fa-users"></i></div><a class="small-box-footer" href="current-groups.html">More info<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3>7</h3>
					<p>Teachers</p>
				</div>
				<div class="icon"><i class="fa fa-user"></i></div><a class="small-box-footer" href="teachers.html">More info<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-3 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h3>$ 1200</h3>
					<p>Income in April 2017</p>
				</div>
				<div class="icon"><i class="fa fa-bank"></i></div><a class="small-box-footer" href="payments-incoming.html">More info<i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</section>
@endsection