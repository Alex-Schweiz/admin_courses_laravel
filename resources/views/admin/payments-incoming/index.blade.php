@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Incoming Payments</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Payments by group</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th style="width: 60%;">Progress</th>
								<th>Status</th>
							</tr>
							<tr>
								<td>15.</td>
								<td>A1 Adults Beginner</td>
								<td>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
									</div>
								</td>
								<td><span class="badge bg-red">55%</span></td>
							</tr>
							<tr>
								<td>85.</td>
								<td>A2 Intensive group</td>
								<td>
									<div class="progress progress-xs">
										<div class="progress-bar progress-bar-yellow" style="width: 70%;"></div>
									</div>
								</td>
								<td><span class="badge bg-yellow">70%</span></td>
							</tr>
							<tr>
								<td>81.</td>
								<td>A2 Speaking club</td>
								<td>
									<div class="progress progress-xs progress-striped active">
										<div class="progress-bar progress-bar-primary" style="width: 30%;"></div>
									</div>
								</td>
								<td><span class="badge bg-light-blue">30%</span></td>
							</tr>
							<tr>
								<td>94.</td>
								<td>A1 Kinds</td>
								<td>
									<div class="progress progress-xs progress-striped active">
										<div class="progress-bar progress-bar-success" style="width: 90%;"></div>
									</div>
								</td>
								<td><span class="badge bg-green">90%</span></td>
							</tr>
						</table>
					</div>
					<div class="box-footer clearfix"></div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="box box-solid box-primary">
					<div class="box-header">
						<h3 class="box-title">Payments by student</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-striped" id="incoming_payments_by_student">
							<thead>
							<tr>
								<th>Payment id</th>
								<th>Name</th>
								<th>Group</th>
								<th>Amount</th>
								<th>Date</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>154</td>
								<td>Ben</td>
								<td>A2 Beginner</td>
								<td>200</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>Alex</td>
								<td>A2 Beginner</td>
								<td>600</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>John</td>
								<td>A1 Beginner</td>
								<td>300</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>Alex</td>
								<td>A2 Beginner</td>
								<td>120</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>Alex</td>
								<td>A2 Beginner</td>
								<td>187</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>Alex</td>
								<td>A2 Beginner</td>
								<td>39</td>
								<td>12/04/2017</td>
							</tr>
							<tr>
								<td>154</td>
								<td>Alex</td>
								<td>A2 Beginner</td>
								<td>39</td>
								<td>12/04/2017</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection