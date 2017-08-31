@extends('layouts.admin')

@section('title', 'Create User')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')

<div class="container container-fluid">
	<form method="POST" action="{{url('/save_user')}}">
	{{ csrf_field() }}
		<div class="col-md-8">
			<div class="panel">
				<div class="panel-heading">
					<h3>New User</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-12 pull-right" style="text-align: right;">
							<div class="well well-sm" >
								<input type="text" name="id" value="" readonly="">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-6">
							<label>Firstname</label>
							<input type="text" name="fname" class="form-control">
						</div>
						<div class="col-md-6">
							<label>lastname</label>
							<input type="text" name="lname" class="form-control">
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-md-6">
							<label>Role</label>
							<select class="form-control" name="role_id">
							@foreach($role as $userRole)
								<option value="{{$userRole->id}}">{{$userRole->desc}}</option>
							@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<label>E-mail</label>
							<input type="email" name="email" class="form-control">
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-md-6">
							<label>Password</label>
							<input type="password" name="password" id="pass" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Confirm Password</label>
							<input type="password" id="conPass" class="form-control">
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="" style="text-align: right;">
						<button class="btn" type="submit">Save</button>
						<button class="btn" type="reset">Clear</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection