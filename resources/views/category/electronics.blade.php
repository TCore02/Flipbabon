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
			<div class="card-header"><h4>Choose sub-category of electronics that you want to buy</h4></div>
		</div><br>
		<div class="card text-white bg-info mb-3" style="max-width: 20rem;"><br>
			<div class="card text-black bg-dark float-left" style="max-width: 15rem;">
				<div class="card btn btn-dark ">
					<a type="btn btn-dark" href="mobiles" class="card float-left">Mobiles & accesories</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card btn btn-dark">
					<a type="btn btn-dark" href="laptop" class="card float-right">Laptop & accesories</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-left" style="max-width: 15rem;">
				<div class="card btn btn-dark">
					<a type="btn btn-dark" href="tv" class="card float-left ">TV</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card float-right btn btn-dark">
					<a type="btn btn-dark" href="washingmachine" class="card float-right">Washing Machine</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card float-right btn btn-dark">
					<a type="btn btn-dark" href="cctv" class="card float-right">CCTV & Cameras</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card float-right btn btn-dark">
					<a type="btn btn-dark" href="ac" class="card float-right">Air Condition & Refrigrator</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card float-right btn btn-dark">
					<a type="btn btn-dark" href="heater" class="card float-right"> Room Heater & Geyser</a>
				</div>
			</div><br>

		</div>
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection