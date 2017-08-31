@extends('layouts.admin')

@section('title', 'New Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8">
	<div class="row">
		<h3>Insurance Company List</h3>
	</div>
	<div class="pull-right">
		<input type="image" src="{{URL::asset('images\add_icon_32.png')}}" name="" data-toggle="modal"  data-target="#favoritesModal">
	</div>
	<div class="row">
		<table class="table table-striped">
			<thead>
				<th>Name</th>
				<th>&nbsp</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($ins as $i)
				<tr>
					<td>{{$i->name}}</td>
					<td><a href="{{route('ins_detail', ['id' => $i->id]) }}"><button type="button" class="btn btn-primary">Detail</button></a></td>
					<td><a href="{{route('ins_edit', ['id'=>$i->id])}}"><input type="image" src="{{URL::asset('images\edit_icon_32.png')}}"></a></td>
					<td><a href=""><input type="image" src="{{URL::asset('images\del_icon_32.png')}}" disabled=""></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
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
	        	<h4 class="modal-title" id="favoritesModalLabel"><strong>Add Insurance Company</strong></h4>
	      	</div>
	      	<div class="modal-body">
	        	<form class="form-horizontal" id="branch_add_frm" method="GET" action="#">
	        		<input type="text" name="co_id" value="{{--$ins->id--}}" class="fade">
	        		<div class="form-group">
	        			<div class="col-md-8">
		        			<label>Company Name</label>
		        			<input type="text" name="co_name" class="form-control" id="co_name">
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
	$('#submit').on('click', function(){
		$name = $('#co_name').val();
		 $.ajax({
                type: "GET",
                url:("{{route('add_insurance_co')}}"),
                data:{co_name:$name},
                success:function(my_data){
                   //Show flash message
                }
            });
	});

</script>
@endsection