@extends('layouts.admin')

@section('title', 'User List')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
	<div class="container">
	<div class="col-md-8">
		<div class="panel">
			<div class="panel-heading">
				<h3>Manage Users</h3>
				<div class="pull-right"><a href="{{url('/create_user')}}"><button class="btn btn-primary">Create User</button></a></div>
			</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<thead>
							<th>First Name</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>&nbsp</th>
							<th>&nbsp</th>
						</thead>
					</tr>
					@foreach($users as $user)
					<tr>
						<td>{{$user->first_name}}</td>
						<td>{{$user->last_name}}</td>
						<td>{{$user->email}}</td>
						<td><a href="{{route('edit_user', [$user->id])}}"><button class="btn btn-primary">Edit</button></a></td>
						<td><a href="#"><button class="btn btn-danger">Delete</button></a></td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="panel-footer">
				
			</div>
		</div>
	</div>	
	</div>
@endsection
