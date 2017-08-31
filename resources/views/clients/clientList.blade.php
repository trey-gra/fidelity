@extends('layouts.admin')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
	<div class="container">
	<div>
		
	</div>
		<table class="table">
			<tr>
				<thead>
					<th>ID</th>
					<th>First Name</th>
					<th>Lastname</th>
					<th>TRN</th>
					<th>&nbsp</th>
					<th>&nbsp</th>
				</thead>
			</tr>
			@foreach($clients as $client)
			<tr>
				<td>{{$client->id}}</td>
				<td>{{$client->fname}}</td>
				<td>{{$client->lname}}</td>
				<td>{{$client->trn}}</td>
				<td><a href="{{route('edit_client', [$client->id])}}"><button class="btn btn-primary">Edit</button></a></td>
				<td><button class="btn btn-danger">Delete</button></td>
			</tr>
			@endforeach
		</table>
	</div>
@endsection
