@extends('layouts.admin')

@section('title', 'New Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8">
	<div class="row">
		<div style="text-align: center;">
			<strong><h3>{{$ins->name}}</h3></strong>
		</div>
	</div>
	<hr />
	<form action="{{route('ins_update')}}" method="GET">
	
		<div class="form-group">
			<input class="form-control" type="text" name="ins_comp" value="{{$ins->name}}" />
			<input type="text" name="idNo" value="{{$ins->id}}" class="fade" />
		</div>
		<div class="form-group" style="text-align: center;">
			<input class="btn btn-success" type="submit" value="Update" />
			<button class="btn btn-danger" onclick="goBack();">Cancel</button>
		</div>
	</form>
</div>	
	<script type="text/javascript">
		function goBack(){
			window.history.back();
		}
	</script>
@endsection