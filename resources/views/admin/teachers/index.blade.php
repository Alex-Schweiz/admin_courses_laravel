@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>Our teachers</h1>
		</div>
		<div class="col-md-2 col-md-offset-7"><a href="teacher-add-new.html" class="btn btn-primary add-new white-link"><i class="fa fa-plus"></i> Add new teacher</a></div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-primary"><a href="/admin/teachers/" class="white-link">
							<h3 class="widget-user-username">Elma Wild</h3></a>
						<h5 class="widget-user-desc">Junior English Teacher</h5>
					</div>
					<div class="widget-user-image"><img src="/admin/img/user1-128x128.jpg" alt="User Avatar" class="img-circle"/></div>
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
			</div>
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-primary">
						<h3 class="widget-user-username">Patricia Green</h3>
						<h5 class="widget-user-desc">Middle English Teacher</h5>
					</div>
					<div class="widget-user-image"><img src="/admin/img/user1-128x128.jpg" alt="User Avatar" class="img-circle"/></div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">3</h5><span class="description-text">Groups</span>
								</div>
							</div>
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">36</h5><span class="description-text">Students</span>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="description-block">
									<h5 class="description-header">15</h5><span class="description-text">Months working</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-primary">
						<h3 class="widget-user-username">Bellinda Smithers</h3>
						<h5 class="widget-user-desc">Senior English Teacher</h5>
					</div>
					<div class="widget-user-image"><img src="/admin/img/user1-128x128.jpg" alt="User Avatar" class="img-circle"/></div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">4</h5><span class="description-text">Groups</span>
								</div>
							</div>
							<div class="col-sm-4 border-right">
								<div class="description-block">
									<h5 class="description-header">48</h5><span class="description-text">Students</span>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="description-block">
									<h5 class="description-header">28</h5><span class="description-text">Months working</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection