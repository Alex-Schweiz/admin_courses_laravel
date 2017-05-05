@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h1>Groups of English</h1>
		</div>
		<div class="col-md-2 col-md-offset-7"><a class="btn btn-primary add-new white-link" href="teacher-add-new.html"><i class="fa fa-plus"></i> Add new group</a></div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12"><a href="knowledge-group-single.html">
					<div class="info-box"><span class="info-box-icon bg-blue">
                    <p>A1</p></span>
						<div class="info-box-content"><span class="info-box-text">Kids Beginner</span></div>
					</div></a></div>
			<div class="col-md-3 col-sm-6 col-xs-12"><a href="knowledge-group-single.html">
					<div class="info-box"><span class="info-box-icon bg-blue">
                    <p>A1</p></span>
						<div class="info-box-content"><span class="info-box-text">Adult Beginner</span></div>
					</div></a></div>
			<div class="col-md-3 col-sm-6 col-xs-12"><a href="knowledge-group-single.html">
					<div class="info-box"><span class="info-box-icon bg-blue">
                    <p>A2</p></span>
						<div class="info-box-content"><span class="info-box-text">Intensive</span></div>
					</div></a></div>
			<div class="col-md-3 col-sm-6 col-xs-12"><a href="knowledge-group-single.html">
					<div class="info-box"><span class="info-box-icon bg-blue">
                    <p>B1</p></span>
						<div class="info-box-content"><span class="info-box-text">Speaking club</span></div>
					</div></a></div>
		</div>
	</section>
@endsection