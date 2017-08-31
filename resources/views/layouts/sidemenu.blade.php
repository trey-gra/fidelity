<ul class="nav nav-pills nav-stacked">
@if(Auth::User()->role_id == 1)
	<li class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle">Administration <span class="caret pull-right"></a>
			<ul class="dropdown-menu">
				<li class="dropdown-header" style="font-weight: bolder;font-size: 14px">User Manager</li>
					<li><a href="{{url('/users_list')}}">View Users</a></li>
					<li><a href="{{url('/create_user')}}">Add Users</a></li>
					<li class="dropdown-header divider" style="font-weight: bolder;font-size: 14px"></li>
				<li class="dropdown-header" style="font-weight: bolder;font-size: 14px">Client Manager</li>
					<li><a href="{{url('/client/index')}}">Client</a></li>
					<li><a href="{{url('/client/list_clients')}}">List Client</a></li>
					<li><a href="#">Delete Client</a></li>
					<li class="dropdown-header divider" style="font-weight: bolder;font-size: 14px"></li>
				<li class="dropdown-header" style="font-weight: bolder;font-size: 14px">Insurance</li>
					<li><a href="{{route('ins_index')}}">Insurance List</a></li>
					<li class="dropdown-header divider" style="font-weight: bolder;font-size: 14px"></li>
				<li class="dropdown-header" style="font-weight: bolder;font-size: 14px">Claim Manager</li>
					<li><a href="{{route('add_claim')}}">Add Claim</a></li>
					<li><a href="{{route('edit_claim')}}">Edit Claim</a></li>
					<li><a href="{{route('claim_list')}}">Claim List</a></li>
					<li class="dropdown-header divider" style="font-weight: bolder;font-size: 14px"></li>
					<li><a href="{{url('/Mailbox')}}"><i class="glyphicon glyphicon-envelope"></i> &nbsp Mailbox </a></li>
			</ul>
	</li>	
@endif
	<li class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle">Client<span class="caret pull-right"></span>
			<ul class="dropdown-menu">
				<li><a href="{{url('/client/index')}}">Client</a></li>
				<li><a href="{{url('/client/list_clients')}}">List Client</a></li>
				<li><a href="#">Delete Client</a></li>
			</ul>	
		</a>
	</li>
	<li class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle">Insurance<span class="caret pull-right">
			<ul class="dropdown-menu">
				<li><a href="{{route('ins_index')}}">Insurance List</a></li>
			</ul>
		</a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Claim<span class="caret pull-right">
			<ul class="dropdown-menu">
				<li><a href="{{route('add_claim')}}">Add Claim</a></li>
				<li><a href="{{route('edit_claim')}}">Edit Claim</a></li>
				<li><a href="{{route('claim_list')}}">Claim List</a></li>	
			</ul>		
		</a>
	</li>
</ul>