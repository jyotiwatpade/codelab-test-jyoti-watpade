
@extends('layout')

@section('content')
	<h1>Create New Brand</h1>
	<hr>
	<form action="{{url('submitbrand')}}" method="POST" enctype="multipart/form-data">
		@csrf
		
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="{{old('name')}}">
		    <span class="text-danger">
		    	@error('name')
		    	{{$message}}
		    	@enderror
		    </span>
		  </div>
		  
		  <div class="form-group">
		    <label for="logo">Logo:</label>
		    <input type="file" class="form-control" placeholder="Enter logo" name="logo" id="logo">
		    <span class="text-danger">
		    	@error('logo')
		    	{{$message}}
		    	@enderror
		    </span>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="{{url('listbrands')}}" class="btn btn-danger">Cancel</a>
		</form>
@endsection