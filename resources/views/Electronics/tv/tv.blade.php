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
		<h1>Television Lists</h1>
		@if(Auth::check() && Auth::user()->role == '1')
			<a href="/tv/create"><i class="fa fa-star"></i><span "><h3>Add</h3> </span></a>
		@endif
		<table class="table table-hover">
			<center>
				<thead>
					<tr>
						<th scope="col">TV Photo</th>
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
				@foreach ($tv as $stv)
					<center>
						<td>
							<div class="text-center">
								<img src="{{ asset('image/Electronics/tv/' .$stv->tv_pic)}}" class="rounded float-left" height="40" width="40">
							</div>
						</td>
						<td><a href="{{'tv/'.($stv->id)}}"> {{$stv->brand}}&nbsp-{{$stv->model}}</a></td>
						<td><span>₹ {{$stv->price}}</span></td>
				    	<td><span >{{$stv->created_at->diffforHumans()}}</span></td>
				    	<td><span >{{$stv->updated_at->diffforHumans()}}</span></td>
				    	@if(Auth::check() && Auth::user()->role == '1')
				    		<td><a href="{{'tv/'.($stv->id).'/edit'}}"  class=" btn"><b>Edit</b></a>&nbsp
				    		<form class="pull-left form-group" method="POST" action="{{'/tv/'.$stv->id}}">
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