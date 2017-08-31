@extends('layouts.admin')

@section('title', 'Claim Dashboard')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<div class="col-md-8">
    <div class="caption">
        <h3 class="pull-right">Claim Dashboard</h3>
    </div>
	
       <a href="{{route('add_claim')}}">
            <div class="thumbnail">
                <img src="http://placehold.it/100x100" alt="">
            </div>
            <div class="caption">
                <h4 class="pull-right">Add Claim</h4>
            </div>
	   </a>
	   <a href="#">
            <div class="thumbnail">
                <img src="http://placehold.it/100x100" alt="">
            </div>
            <div class="caption">
                <h4 class="pull-right">Edit Claim</h4>
            </div>
       </a>
	   <a href="#" class="btn btn-primary">
        <div class="thumbnail">
            <img src="http://placehold.it/100x100" alt="">
        </div>
        <div class="caption">
            <h4 class="pull-right">Add Claim</h4>
        </div>
    </a>
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