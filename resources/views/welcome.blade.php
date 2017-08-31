@extends('layouts.master')

@section('title', 'Welcome')

@section('sidebar')
    @include('layouts.sidemenu')
@stop

@section('content')
<div class="row" style="padding-top: 80px;">
	<div class="col-md-8 col-md-offset-2">
    <div class="row carousel-holdcol-md-offset-2er">
        <div class="col-md-10 col-md-offset-1">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                	<div class="item active">
                    	<img class="slide-image" src="{{URL::asset('images\slide_0.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="{{URL::asset('images\slide_1.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="{{URL::asset('images\slide_2.jpg')}}" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                	<span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 10px;">
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="{{url('/services')}}"><img src="{{URL::asset('images\pic_1.jpg')}}"></a>
            </div>
            
        <!--
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">First Product</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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
            -->
        </div>
         <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="{{url('/services')}}"><img src="{{URL::asset('images\pic_2.jpg')}}"></a>
                <!--<img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">$24.99</h4>
                    <h4><a href="#">First Product</a></h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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
                </div> -->
            </div>
        </div>
         <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <a href="{{url('/services')}}"><img src="{{URL::asset('images\pic_3.jpg')}}"></a>
               <!-- <img src="http://placehold.it/320x150" alt="">
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
                </div> -->
            </div>
        </div>
    </div>
</div>

</div>

@endsection