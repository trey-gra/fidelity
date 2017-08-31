@extends('layouts.admin')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
	<div class="container container-fluid">
	<div class="col-md-8">
		<table class="table">
			<tr>
				<thead>
					<th>Claim #</th>
					<th>Detail</th>
					<th>Acc. Date</th>
					<th>Area</th>
					<th>&nbsp</th>
					<th>&nbsp</th>
				</thead>
			</tr>
			@foreach($list as $c)
			<tr>
				<td>{{$c->claim_id}}</td>
				<td>{{$c->acc_detail}}</td>
				<td>{{$c->acc_date}}</td>
				<td>{{$c->acc_area}}</td>
				<td><a href="#"><button class="btn btn-primary">Edit</button></a></td>
				<td><button class="btn btn-danger">Delete</button></td>
			</tr>
			@endforeach
		</table>
	</div>
		
	</div>
@endsection
