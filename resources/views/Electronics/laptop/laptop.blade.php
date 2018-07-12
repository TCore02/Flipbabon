@extends('layout.header')

@section('content')

<center><br><br>
	@if(Session::has('message') && Session::has('success'))
		<div class="alert {{ Session::get('success') ? 'alert-success' : 'alert-danger' }}">
			{{Session::get('message')}}
		</div>
	@endif
	<br>
	<div class="col-gl-4 col-lg-offset-4">
		<h1>Laptop Lists</h1>
		@if(Auth::check() && Auth::user()->role == '1')
			<a href="/laptop/create"><i class="fa fa-star"></i><span "><h3>Add</h3> </span></a>
		@endif
		<table class="table table-hover">
			<center>
				<thead>
					<tr>
						<th scope="col">Laptop Photo</th>
						<th scope="col">Brand & Model</th>
						<th scope="col">Price</th>
						<th scope="col">Created_At</th>
						<th scope="col">Updated_At</th>
						@if(Auth::check() && Auth::user()->role == '1')
							<th scope="col">Action</th>
						@endif
					</tr>
				</thead>
			</center>
			<tbody>
				@foreach ($laptop as $lappy)
					<center>
						<td>
							<div class="text-center">
								<img src="{{ asset('image/Electronics/laptop/' .$lappy->laptop_pic)}}" class="rounded float-left" height="40" width="40">
							</div>
						</td>
						<td><a href="{{'laptop/'.($lappy->id)}}"> {{$lappy->brand}}&nbsp-{{$lappy->model}}</a></td>
						<td><span>₹ {{$lappy->price}}</span></td>
				    	<td><span >{{$lappy->created_at->diffforHumans()}}</span></td>
				    	<td><span >{{$lappy->updated_at->diffforHumans()}}</span></td>
				    	@if(Auth::check() && Auth::user()->role == '1')
				    		<td><a href="{{'laptop/'.($lappy->id).'/edit'}}"  class=" btn"><b>Edit</b></a>&nbsp
				    		<form class="pull-left form-group" method="POST" action="{{'/laptop/'.$lappy->id}}">
					    		@csrf
					    		@method('DELETE')
					    		<button type="submit">Delete</button>
				    		</form>
				    	@endif
				    	</td>
				    </center>
				@endforeach
			</tbody>
		</table>
	</div>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection