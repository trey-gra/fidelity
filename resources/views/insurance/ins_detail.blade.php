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
	<div class="pull-right">
		<input type="image" src="{{URL::asset('images\add_icon_32.png')}}" name="" data-toggle="modal"  data-target="#favoritesModal">
	</div>
	<div class="row">
		<table class="table table-condense table-striped">
			<thead>
				<th>Branch</th>
				<th>Address</th>
				<th>Telephone</th>
				<th>Telephone</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</thead>
			<tbody>
				@foreach($ins->branch as $branch)
					<tr>
						<td>{{$branch->name}}</td>
						<td>{{$branch->address}}</td>
						<td>{{$branch->tel_1}}</td>
						<td>{{$branch->tel_2}}</td>
						<td><a href="{{route('ins_branch_form', ['id'=>$branch->id, 'comp_id'=>$ins->id])}}"><input type="image" src="{{URL::asset('images\edit_icon_32.png')}}"  name="br_edit" id="br_edit"></a></td>
						<td><a href="{{route('ins_branch_delete', ['id'=>$branch->id])}}"><input type="image" src="{{URL::asset('images\del_icon_32.png')}}"  name="br_delete" id="br_delete"></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="row" style="text-align: center;">
		<button class="btn btn-primary" onclick="goBack()"><<- Back</button>
	</div>
</div>
<!-- =====================================ADD MODAL====================================================== -->
<div class="modal fade" id="favoritesModal" tabindex="-1" aria-labelledby="favoritesModalLabel">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	          	</button>
	        	<h4 class="modal-title" id="favoritesModalLabel"><strong>Add Branch</strong></h4>
	      	</div>
	      	<div class="modal-body">
	        	<form class="form-horizontal" id="branch_add_frm" method="GET" action="{{route('ins_branch_add')}}">
	        		<input type="text" name="co_id" value="{{$ins->id}}" class="fade" id="co_id">
	        		<div class="form-group">
	        			<div class="col-md-8">
		        			<label>Parish</label>
		        			<select class="form-control" name="p_name" id="p_name">
		        				<option value="">Select Parish</option>
		        				@foreach($par as $p)
		        					<option value="{{$p->name}}">{{$p->name}}</option>
		        				@endforeach
		        			</select>
		        		</div>
		        		<div class="col-md-8">
		        			<label>Telephone </label>
		        			<input type="text" name="tel_1" class="form-control" id="tel_1">
		        			<label>Telephone </label>
		        			<input type="text" name="tel_2" class="form-control" id="tel_2">
		        		</div>
		        		<div class="col-md-8">
		        			<label>.</label>
		        			<textarea name="address" placeholder="Address" class="form-control" id="address"></textarea>
		        		</div>
	        		</div>
	        	</form>
	      	</div>
	      	<div class="modal-footer">
	      		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<span class="pull-right">
	         		<button type="submit" class="btn btn-primary" id="submit">Save</button>
	        	</span>
	      	</div>
    	</div>
  	</div>
</div>
<!-- ================================================================================================================== -->

<script type="text/javascript">
	function goBack(){
		window.history.back();
	}

	$('#submit').on('click', function(){
		var $cId = $('#co_id').val();
		var $par = $('#p_name').val();
		var $tel1 = $('#tel_1').val();
		var $tel2 = $('#tel_2').val();
		var $add = $('#address').val();
		if($par != ""){
			$.ajax({
                type: "GET",
                url:("{{route('ins_branch_add')}}"),
                data:{co_id:$cId, p_name:$par, tel_1:$tel1, tel_2:$tel2, address:$add},
                success:function(my_data){
                	console.log(my_data);
                    $('#favoritesModal').modal('toggle');
                    location.reload(true);
                }
            });
		}
	});
</script>
@endsection