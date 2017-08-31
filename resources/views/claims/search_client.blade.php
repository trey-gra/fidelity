@extends('layouts.admin')

@section('title', 'Active Client Result(s)')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
<div class="container container-fluid">
	<div class="col-md-8">
		<table class="table table-striped">
			<tr>
				<thead>
					<th>ID #</th>
					<th>First Name</th>
					<th>Lastname</th>
					<th>DOB</th>
					<th>TRN</th>
					<th>&nbsp</th>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->fname}}</td>
							<td>{{$user->lname}}</td>
							<td>{{$user->DOB}}</td>
							<td>{{$user->trn}}</td>
							<td><a href="{{route('find_claim_user', [$user->id])}}"><button class="btn btn-primary">Select</button></a></td>
						</tr>
					@endforeach
				</tbody>
			</tr>
		</table>
	</div>
</div>

@endsection