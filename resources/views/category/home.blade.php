@extends('layout.header')

@section('content')

<center><br><br>
@if(Session::has('message') && Session::has('success'))
	<div class="alert {{ Session::get('success') ? 'alert-success' : 'alert-danger' }}">
		{{Session::get('message')}}
	</div>
@endif
	<form method="post" >
	@csrf
		<div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
			<div class="card-header"><h4>Choose category of product that you want to buy</h4></div>
		</div><br>
		<div class="card text-white bg-info mb-3" style="max-width: 20rem;"><br>
			<div class="card text-black bg-dark float-left" style="max-width: 10rem;">
				<div class="card btn btn-dark ">
					<a type="btn btn-dark" href="electronics" class="card float-left">Electronics</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 10rem;">
				<div class="card btn btn-dark">
					<a type="btn btn-dark" href="beautyproducts" class="card float-right">Beauty Products</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-left" style="max-width: 10rem;">
				<div class="card btn btn-dark">
					<a type="btn btn-dark" href="clothes" class="card float-left ">Clothes</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 10rem;">
				<div class="card float-right btn btn-dark">
					<a type="btn btn-dark" href="homeproducts" class="card float-right">Home Products</a>
				</div>
			</div><br>

		</div>
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection