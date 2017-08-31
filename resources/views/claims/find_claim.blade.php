@extends('layouts.admin')

@section('title', 'Find Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="container-fluid">
	<form action="{{route('find_claim')}}" method="POST" >
		 {{ csrf_field() }} 
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Find Claim</h4>
				</div>
				<div class="panel-body">
					<!-- *********************START Search Claim Number *********************-->
					<div class="form-group">
						<div class="col-md-2"  style="text-align: right; padding-top: 30px;">
							<input type="radio" checked="true" name="opt" >
						</div>
						<div class="col-md-10">
							<label>Claim Number</label>
							<input type="text" name="claim_no" class="form-control">
						</div>
					</div>
					<!-- *********************END Search Claim Number *********************-->
					<!-- *********************END Search Claim Number *********************-->
					<div class="form-group">
						<div class="col-md-2" style="text-align: right; padding-top: 30px;">
							<input type="radio"  name="opt" >
						</div>
						<div class="col-md-5">
							<label>Client Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="col-md-5 row">
							<label>TRN</label>
							<input type="text" name="trn" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2" style="text-align: right; padding-top: 30px;">
							<input type="radio" name="opt" >
						</div>
						<div class="col-md-5">
							<label>Start Date</label>
							<input type="date" name="s_date" class="form-control">
						</div>
						<div class="col-md-5">
							<label>End Date</label>
							<input type="date" name="e_date" class="form-control">
						</div>
					</div>
					
				</div>
				<div class="panel-footer">
					<div class="form-group">
						<button class="form-control btn btn-primary" type="submit">Find</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection