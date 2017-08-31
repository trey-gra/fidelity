@extends('layouts.admin')

@section('title', 'Mailbox')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-10">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4><strong>Fidelity Claims Consultant - Mailbox </h4><span class="pull-right">Unread <span class="badge">{{count($mails)}}</span></span>
		</div>
		<div class="panel-body">
			<table class="table table-condense">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Message</th>
					<th>Date</th>
					<th>Status</th>
				</thead>
				<tbody>
				@foreach($mails as $mail)
					<tr>
						<td><a href="{{route('readMessage', [$mail->id])}}">{{$mail->name}}</a></td>
						<td>{{$mail->email}}</td>
						<td>{{$mail->detail}}</td>
						<td>{{$mail->created_at}}</td>
						<td>@if ($mail->status == 1) 
								<strong>Unread</strong>
							@else
								<strong>Read</strong>
							@endif
						 </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection