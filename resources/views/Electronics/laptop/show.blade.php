@extends('layout.header')

@section('content')
<center><br><br>
<div class="card text-white bg-dark mb-3" style="max-width: 30rem;">
	<div class="card-header"><h4>Details</h4>
	</div>
	<div class="card-body">
		<div class="text-center">
			<img src="{{ asset('image/Electronics/laptop/' .$item->laptop_pic)}}" class="rounded float-left" height="250" width="200">
      	</div>
      	<h4>{{$item->category}}&nbsp&nbsp:&nbsp&nbsp{{$item->sub_category}}
		<h3>Brand : {{$item->brand}}</h3><br>
		<h4>Model : {{$item->model}}</h4><br>
		<h5>Price: ₹ {{$item->price}}</h5><br>
		<h6>Specification : {{$item->specification}}</h6><br><br>
	</div>
</div>
<a href="/laptop" class="btn btn-info">Back</a><br>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection