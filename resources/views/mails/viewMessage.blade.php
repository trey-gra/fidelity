@extends('layouts.admin')

@section('title', 'Mailbox')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8 " >
	<div class="panel" style="background-color:#FFC733">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel-body">
				<form class="form-horizontal" method="GET" action="#">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name"  class="form-control" value="{{$message->name}}">
						</div>
						<div class="form-group">
							<label>Telephone</label>
							<input type="text" name="tel"  class="form-control" value="{{$message->tele}}">
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input type="text" name="email"  class="form-control" value="{{$message->email}}">
						</div>
						<div class="form-group">
						<label>Detail</label>
							<textarea name="detail" placeholder="Enter details" class="form-control" cols="5" rows="5">
								{{$message->detail}}
							</textarea>
						</div>
						<div class="form-group" style="text-align: center;">
							<a href="{{url('Mailbox')}}" class="btn btn-default">Go Back</a>
							<button type="reset" class="btn btn-default">Clear</button>
						<button type="submit" class="btn btn-default">Reply</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection