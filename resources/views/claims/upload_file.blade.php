@extends('layouts.admin')

@section('title', 'New Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="container-fluid">
	<form class="form form-horizontal" method="POST" action="{{route('upload')}}" enctype="multipart/form-data">
		<div class="col-md-8">
			<div class="model">
				<div class="model-heading">
					<h3>Upload Files</h3>
				</div>
				<div class="modal-body">
						<label>Select File(s)</label>
						<input type="text" class="fade" name="claim_id" value="{{$claim_id}}">
						<input type="file" name="f[]" class="form-control">
						<br/>
						<input type="file" name="f[]" class="form-control">
						<div class="modal-footer">
							<button class="btn btn-primary" id="upload-files" type="submit">Upload</button>
							{!! csrf_field() !!}
						</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection