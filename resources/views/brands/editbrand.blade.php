
@extends('layout')

@section('content')
	<h1>Edit Brand</h1>
	<hr>
	<form action="{{url('updatebrand')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" id="id" value="{{$brand->id}}">
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"  value="{{$brand->name}}">
		    <span class="text-danger">
		    	@error('name')
		    	{{$message}}
		    	@enderror
		    </span>
		  </div>
		  
		  <div class="form-group">
		    <label for="logo">Logo:</label>
		    <input type="file" class="form-control" placeholder="Enter logo" name="logo" id="logo">
		    <input type="hidden" name="old_logo" id="old_logo" value="{{$brand->logo}}">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="{{url('listbrands')}}" class="btn btn-danger">Cancel</a>
		</form>
@endsection