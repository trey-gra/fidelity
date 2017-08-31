@extends('layouts.admin')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8">
	<h1>Clients</h1>
	<a href="{{url('/client/add_form')}}" class="btn btn-primary">Add Clients</a>
	<a href="#" class="btn btn-primary">Edit Clients</a>
	<a href="#" class="btn btn-primary">Delete Clients</a>
</div>
<div class="col-md-4">
	<div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
        	<h4 class="pull-right">$24.99</h4>
            <h4><a href="#">First Product</a></h4>
            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
        	<p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
    <div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
            <h4 class="pull-right">$24.99</h4>
            <h4><a href="#">First Product</a></h4>
            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
            <p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
</div>
@endsection