@extends('layouts.admin')

@section('title', 'New Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')

<!-- ===============================================EDIT MODAL========================================================= -->
<form class="form-horizontal" id="branch_add_frm" method="GET" action="{{route('ins_branch_update')}}">
	<input type="text" name="co_br_id" value="{{$dtl->id}}" class="fade">
	<input type="text" name="co_id" value="{{$ins_co}}" class="fade">
	<div class="form-group">
	    <div class="col-md-8">
		    <label>Parish</label>
		    <input type="text" class="form-control" id="p_name" value="{{$dtl->name}}" name="p_name">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-8">
		    <label>Telephone </label>
		    <input type="text" name="tel_1" class="form-control" id="tel_1" value="{{ $dtl->tel_1 }}">
		    <label>Telephone </label>
		    <input type="text" name="tel_2" class="form-control" id="tel_2" value="{{-- $dtl->tel_2 }}">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-8">
		    <label>Address</label>
		    <textarea name="address" placeholder="Address" rows="4" class="form-control" id="address" >{{ $dtl->address }}</textarea>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-md-8" style="text-align: center;">
	        <button type="submit" class="btn btn-primary" id="submit">Update</button>
	        <button type="button" class="btn btn-default" onclick="goBack();">Cancel</button>
		</div>
	</div>	
</form>
<!-- ================================================================================================================== -->

<script type="text/javascript">
	function goBack(){
		window.history.back();
	}
</script>
@endsection