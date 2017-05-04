@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>Current groups</h1>
		</div>
		<div class="col-md-2 col-md-offset-7"><a class="btn btn-primary add-new white-link" href="current-group-add-new.html"><i class="fa fa-plus"></i> Add new group</a></div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<div class="box box-widget widget-user-2">
					<div class="widget-user-header bg-blue"><a class="white-link" href="current-groups-single.html">
							<h3 class="widget-user-username">A1 Beginner</h3></a>
						<h5 class="widget-user-desc">Adult beginner group</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Students<span class="pull-right badge bg-blue">7</span></a></li>
							<li><a href="#">Start Date<span class="pull-right badge bg-green">21/01/2017</span></a></li>
							<li><a href="#">End Date<span class="pull-right badge bg-green">17/04/2017</span></a></li>
							<li><a href="#">Average score<span class="pull-right badge bg-red">78.5</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-widget widget-user-2">
					<div class="widget-user-header bg-blue"><a class="white-link" href="current-groups-single.html">
							<h3 class="widget-user-username">A1 Beginner</h3></a>
						<h5 class="widget-user-desc">Kids beginner group</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Students<span class="pull-right badge bg-blue">7</span></a></li>
							<li><a href="#">Start Date<span class="pull-right badge bg-green">21/01/2017</span></a></li>
							<li><a href="#">End Date<span class="pull-right badge bg-green">17/04/2017</span></a></li>
							<li><a href="#">Average score<span class="pull-right badge bg-red">78.5</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-widget widget-user-2">
					<div class="widget-user-header bg-blue"><a class="white-link" href="current-groups-single.html">
							<h3 class="widget-user-username">A2</h3></a>
						<h5 class="widget-user-desc">Adult Intensive group</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Students<span class="pull-right badge bg-blue">7</span></a></li>
							<li><a href="#">Start Date<span class="pull-right badge bg-green">21/01/2017</span></a></li>
							<li><a href="#">End Date<span class="pull-right badge bg-green">17/04/2017</span></a></li>
							<li><a href="#">Average score<span class="pull-right badge bg-red">78.5</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection