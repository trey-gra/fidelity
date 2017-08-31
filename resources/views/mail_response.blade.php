@extends('layouts.master')

@section('title', 'Contact Us')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<h4>Message Sent</h4>
			</div>
			<div class="pane-body">
				<h1>Thank you !!</h1>
				<p>Your request was received and an agent will contact you in the shotest possible time</p>
			</div>
			<div class="panel-footer">
				&nbsp
			</div>
		</div>
	</div>
@endsection