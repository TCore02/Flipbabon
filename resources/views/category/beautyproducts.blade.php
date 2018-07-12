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
			<div class="card-header"><h4>Choose sub-category of Beauty Products that you want to buy</h4></div>
		</div><br>
		<div class="card text-white bg-info mb-3" style="max-width: 20rem;"><br>
			<div class="card text-black bg-dark float-left" style="max-width: 15rem;">
				<div class="card btn btn-dark ">
					<a type="btn btn-dark" href="men_beauty" class="card float-left">Men</a>
				</div>
			</div><br>

			<div class="card text-pink bg-dark float-right" style="max-width: 15rem;">
				<div class="card btn btn-dark">
					<a type="btn btn-dark" href="women_beauty" class="card float-right">Women</a>
				</div>
			</div><br>
		</div>
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection