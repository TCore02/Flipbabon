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
		
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection