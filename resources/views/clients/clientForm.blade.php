@extends('layouts.admin')

@section('title', 'Client')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8">
	<form name="addClient" method="post" class="form-horizontal" action="{{url('/client/save_client')}}" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2>Add Client</h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div style="text-align: center;">
        					<img src="http://placehold.it/150x150" class="img-circle" alt="Image">
						</div>
					</div>
					<div class="col-md-6">
						<div class="well well-sm pull-right">
							<label class="control-label">ClientID</label>
							<input type="text" name="clientid" class="form-control" value="{{$cid}}">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="control-label">Firstname</label>
						<input type="text" name="fname" class="form-control">
					</div>
					<div class="col-md-6">
						<label class="control-label">Lastname</label>
						<input type="text" name="lname" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="control-label">TRN</label>
						<input type="text" name="trn" class="form-control">
					</div>
					<div class="col-md-6">
						<label class="control-label">DOB (MM-DD-YYYY)</label>
						<input type="date" name="dob" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="control-label">Telephone (Mobile)</label>
						<input type="text" name="tel1" class="form-control">
					</div>
					<div class="col-md-6">
						<label class="control-label">Telephone (Mobile)</label>
						<input type="text" name="tel2" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label class="control-label">Address</label>
						<textarea class="form-control" rows="3" name="address"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="control-label">Occupation</label>
						<select name="job_id" class="form-control">
							<option value="">Select Occupation</option>
							@foreach($occ as $job)
								<option value="{{$job->id}}">{{$job->desc}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-6">
						<label class="control-label">Parish</label>
						<select name="parish_id" class="form-control">
							<option value="">Select Parish</option>
							@foreach($par as $parish)
								<option value="{{$parish->id}}">{{$parish->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="row">
					<div style="padding: 12px 12px 0px 12px;">
						<input type="submit" name="Save" value="Save" class="btn btn-success form-control">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-md-4">
		<div class="thumbnail">
	        <img src="http://placehold.it/320x150" alt="">
	        <div class="caption">
	        	<h4 class="pull-right">$24.99</h4>
	            <h4><a href="#">First Product</a></h4>
	            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
	        </div>
	        <div class="ratings">
	        	<p class="pull-right">15 reviews</p>
	            <p>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	                <span class="glyphicon glyphicon-star"></span>
	            </p>
	        </div>
	    </div>
	    <div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
            <h4 class="pull-right">$24.99</h4>
            <h4><a href="#">First Product</a></h4>
            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
            <p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
	</div>
@endsection
