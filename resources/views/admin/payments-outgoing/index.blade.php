@extends('admin.layout.main')
@section('content')
	<section class="content-header">
		<h1>Outgoing Payments</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Payments by teacher</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered">
							<tbody><tr>
								<th style="width: 10px;">id</th>
								<th>Name</th>
								<th>Period</th>
								<th style="width: 40px;">Amount</th>
								<th>Date of payment</th>
							</tr>
							<tr>
								<td>3</td>
								<td>Kalye Jenner</td>
								<td>February 2017</td>
								<td>$150</td>
								<td>25/02/2017</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Joanna Gold</td>
								<td>February 2017</td>
								<td>$180</td>
								<td>25/02/2017</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Megan Smith</td>
								<td>February 2017</td>
								<td>$170</td>
								<td>25/02/2017</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Brit Marx</td>
								<td>February 2017</td>
								<td>$180</td>
								<td>25/02/2017</td>
							</tr>
							</tbody></table>
					</div>
					<div class="box-footer clearfix"></div>
				</div>
			</div>
		</div>
	</section>
@endsection