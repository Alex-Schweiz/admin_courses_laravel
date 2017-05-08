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
			@foreach($students as $student)
				<div class="col-md-3">
					<div class="box box-widget widget-user-2">
						<div class="widget-user-header bg-blue">
							<div class="widget-user-image"><img class="img-circle" src="{{$student->photo}}" alt="User Avatar"></div><a class="white-link" href="/admin/students/{{$student->id}}">
								<h3 class="widget-user-username">{{$student->name}}</h3></a>
							<h5 class="widget-user-desc">{{$student->current_group}} {{$student->current_group}}</h5>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection