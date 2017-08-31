@extends('layouts.master')

@section('title', 'Contact Us')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')

<div class="container-fluid" style="margin-top:100px">
	<div class="col-md-6 col-md-offset-3">
		<div class="thumbnail">
			<img src="{{URL::asset('images\contact-us-header.jpg')}}">
		</div>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<div class="panel" style="background-color:#FFC733">
			<div class="panel-heading">
				<strong>Contact Us:</strong>
			</div>
			<div class="panel-body">
				<div class="col-md-6">
					<strong>Address</strong><br>
					Lot 187, 6 East<br>
					Greater Portmore <br>
					St. Catherine
				</div>
				<div class="col-md-6">
					<strong>Contact</strong><br>
						Telefax: (876) 989-6003<br>
						Mobile:  (876) 989-6003<br>
						E-Mail:  sneedfidelity@yahoo.com
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-6 col-md-offset-3" >
			<div class="panel" style="background-color:#FFC733">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="{{url('save_message')}}">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name"  class="form-control">
							</div>
							<div class="form-group">
								<label>Telephone</label>
								<input type="text" name="tel"  class="form-control">
							</div>
							<div class="form-group">
								<label>E-mail</label>
								<input type="text" name="email"  class="form-control">
							</div>
							<div class="form-group">
								<label>Detail</label>
								<textarea name="detail" placeholder="Enter details" class="form-control" cols="5" rows="5"></textarea>
							</div>
							<div class="form-group" style="text-align: center;">
								<button type="reset" class="btn">Clear</button>
								<button type="submit" class="btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection