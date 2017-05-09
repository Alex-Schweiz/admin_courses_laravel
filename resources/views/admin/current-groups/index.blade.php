@extends('admin.layout.main')
@section('content')
	<section class="content-header row">
		<div class="col-md-3">
			<h3>Current single group</h3>
		</div>
		<div class="col-md-2 col-md-offset-7"><a class="btn btn-primary add-new white-link" href="/admin/current-groups/create"><i class="fa fa-plus"></i> Add new group</a></div>
	</section>
	<section class="content">
		<div class="row">
			@foreach($current_groups as $current_group)
				<div class="col-md-4">
					<div class="box box-widget widget-user-2">
						<div class="widget-user-header bg-blue">
							<div class="row">
								<div class="col-md-1">
									<h2 class="group-level-header">{{$current_group->group_level}}</h2>
								</div>
								<div class="col-md-10"><a class="white-link" href="/admin/current-groups/{{$current_group->id}}">
										<h3 class="widget-user-username">{{$current_group->group_type}}</h3></a></div>
							</div>
						</div>
						<div class="box-footer no-padding">
							<ul class="nav nav-stacked">
								<li><a href="#">Students<span class="pull-right badge bg-blue">{{$current_group->students->count()}}</span></a></li>
								<li><a href="#">Start Date<span class="pull-right badge bg-green">{{$current_group->start_date}}</span></a></li>
								<li><a href="#">End Date<span class="pull-right badge bg-green">{{$current_group->finish_date}}</span></a></li>
								<li><a href="#">Average score<span class="pull-right badge bg-red">78.5</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection