@extends('layouts.admin')

@section('title', 'Edit User')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')

<div class="container container-fluid">
	<form method="POST" action="{{route('update_user')}}">
	{{ csrf_field() }}
		<div class="col-md-8">
			<div class="panel">
				<div class="panel-heading">
					<h4>Edit User</h4>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-12 pull-right" style="text-align: right;">
							<div class="well well-sm" >
								<label>User ID :</label>
								<input type="text" name="id" value="{{$user->id}}" readonly="">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-6">
							<label>Firstname</label>
							<input type="text" name="first_name" class="form-control" value="{{$user->first_name}}">
						</div>
						<div class="col-md-6">
							<label>lastname</label>
							<input type="text" name="last_name" class="form-control" value="{{$user->last_name}}">
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-md-6">
							<label>Role</label>
							<select class="form-control" name="role_id">
							<option selected="true" value="{{$user->role_id}}">{{$user->role_id}}</option>
							@foreach($role as $userRole)
								<option value="{{$userRole->id}}">{{$userRole->desc}}</option>
							@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label>E-mail</label>
							<input type="email" value="{{$user->email}}" name="email" class="form-control">
						</div>
					</div>
					<br>
					<div class="form-group">
						
						<div class="col-md-12">
							<input type="text" class="fade" id="pass">
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="" style="text-align: right;">
						<button class="btn btn-primary" type="submit">Save</button>
						<button class="btn btn-primary">Back</button>
						<button class="btn btn-primary" type="reset">Clear</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="col-md-12">
		<button class="btn btn-danger" id="reset">Reset Password</button>
	</div>
</div>
<script type="text/javascript">
	$('#reset').on('click', function(){
		alert('Password set to default');
		$('#pass').attr('name', 'password');
		$('#pass').val('P@$$w0rd');
	});
	$('#back').on('click', function(){
		window.history.back();
	});
</script>
@endsection