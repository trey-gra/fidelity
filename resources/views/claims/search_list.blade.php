@extends('layouts.admin')

@section('title', 'Claim Search Result(s)')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
<div class="container container-fluid">
	<div class="col-md-8">
		<div class="panel">
			<div class="panel-heading">
				<h3>Name search results</h3>
			</div>
			<div class="panel-body">
				<table class="table table-condense">
					<tr>
						<thead>
							<th>Claim #</th>
							<th>Detail</th>
							<th>Acc. Date</th>
							<th>Area</th>
							<th>&nbsp</th>
						</thead>
						<tbody>
							@foreach($claims as $claim)
								<tr>
									<td>{{$claim->claim_id}}</td>
									<td>{{$claim->acc_detail}}</td>
									<td>{{$claim->acc_date}}</td>
									<td>{{$claim->acc_area}}</td>
									<td><a href="{{route('find_claim_id', [$claim->claim_id])}}"><button class="btn btn-primary">Select</button></a></td>
								</tr>
							@endforeach
						</tbody>
					</tr>
				</table>
			</div>
			
			<div class="panel-footer">
				<button class="btn btn-primary" name="back" id="back"><< Back</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#back').on('click', function(){
		history.back();
	});
</script>
@endsection