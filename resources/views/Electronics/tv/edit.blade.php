@extends('layout.header')

@section('content')

<center><br><br>
	<form method="post" action="/tv/{{$item->id}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
	<div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
		<div class="card-header"><h4>Edit the details of Mobiles</h4></div>
			<div class="card-body">

				<h5 class="card-title">
				<label for="tv_pic">Mobile Photo</label>
				<input type="file" name="tv_pic" class="form-control{{ $errors->has('tv_pic') ? ' is-invalid' : '' }}" value="{{$item->tv_pic}}">
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('tv_pic'))
						<div class="alert alert-danger">
							{{$errors->first('tv_pic')}}
						</div>
					@endif
				</span>
					
				<h5 class="card-title">
				<label for="category">Category</label>
				<select class="form-control" name="category">
	                <option type="checkbox" value="">Electronics</option>
	                <option type="checkbox" value="">Beauty Products</option>
	                <option type="checkbox" value="">Clothes</option>
	                <option type="checkbox" value="">Home Products</option>
              	</select>
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('category'))
						<div class="alert alert-danger">
							{{$errors->first('category')}}
						</div>
					@endif
				</span>

				<h5 class="card-title">
				<label for="sub_category">Sub Category</label>
				<select class="form-control" name="sub_category">
	                <option type="checkbox" value="">Mobiles</option>
	                <option type="checkbox" value="">Laptop</option>
	                <option type="checkbox" value="">TV</option>
	                <option type="checkbox" value="">Washing Machine</option>
	                <option type="checkbox" value="">CCTV & Cameras</option>
	                <option type="checkbox" value="">Air Condition & Refrigrator</option>
	                <option type="checkbox" value="">Heater & Geyser</option>
              	</select>
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('sub_category'))
						<div class="alert alert-danger">
							{{$errors->first('sub_category')}}
						</div>
					@endif
				</span>

				<h5 class="card-title">
				<label for="brand">Brand</label>
				<input type="text" class="form-control" id="brand" name="brand" placeholder="e.g. Samsung , Sony , Apple , etc" value="{{$item->brand}}">
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('brand'))
						<div class="alert alert-danger">
							{{$errors->first('brand')}}
						</div>
					@endif
				</span>

				<h5 class="card-title">
				<label for="model">Model</label>
				<input type="text" class="form-control" id="model" name="model" placeholder="Bravia , etc" value="{{$item->model}}">
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('model'))
						<div class="alert alert-danger">
							{{$errors->first('model')}}
						</div>
					@endif
				</span>

				<h5 class="card-title">
				<label for="price">Price</label>
				<input type="number" class="form-control" id="price" name="price" placeholder="e.g. 10099" value="{{$item->price}}">
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('price'))
						<div class="alert alert-danger">
							{{$errors->first('price')}}
						</div>
					@endif
				</span>

				<h5 class="card-title">
				<label for="specification">Specifiaction</label>
				<textarea rows="5" cols="100" type="text" class="form-control" id="specification" name="specification" placeholder="specification of television">{{$item->specification}}</textarea>
				</h5>
				<span>
				{{-- Display errors --}}
					@if($errors->has('specification'))
						<div class="alert alert-danger">
							{{$errors->first('specification')}}
						</div>
					@endif
				</span>

				<center>
					<button type="submit" class="btn btn-info ">Update</button><br><br>
				</center>
				<a href="/mobiles" class="btn btn-info">Cancel</a><br>
			</div>
		</div>
	</form>
</center>

@endsection

@section('footer')
	@include('layout.footer')
@endsection