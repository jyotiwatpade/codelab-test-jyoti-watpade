
@extends('layout')

@section('content')
	<h1>Edit Model</h1>
	<hr>
	<form action="{{url('updatemodel')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="model_id" id="model_id" value="{{$model->model_id}}">
		<div class="form-group">
		    <label for="brand_id">Brand Name:</label>
		    <select class="form-control" id="brand_id" name="brand_id">
		    	<option value="" selected="true" disabled="disabled">Select Brand</option>
		    	@foreach($brands as $brand)
	        		<option value="{{$brand->id}}" {{( $brand->id == $model->brand_id) ? 'selected': ''}}>{{$brand->name}}</option>
	        	@endforeach
	      </select>
	    </div>
		<div class="form-group">
		    <label for="name">Model Name:</label>
		    <input type="text" class="form-control" value="{{$model->model_name}}" name="model_name" id="model_name" required="">
		    <span class="text-danger">
		    	@error('model_name')
		    	{{$message}}
		    	@enderror
		    </span>
		</div>
		  
		<div class="form-group">
		    <label for="manufacturing_year">Manufacturing Year</label>
		    <input type="text" id="manufacturing_year" class="form-control" name="manufacturing_year" value="{{$model->manufacturing_year}}" />
		    <span class="text-danger">
		    	@error('manufacturing_year')
		    	{{$message}}
		    	@enderror
		    </span>
		</div>

		<div class="form-group">
		    <label for="image">Image:</label>
		    <input type="file" class="form-control"  name="image" id="image">
		    <input type="hidden" name="old_image" id="old_image" value="{{$model->image}}">
		    <span class="text-danger">
		    	@error('image')
		    	{{$message}}
		    	@enderror
		    </span>
		 </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="{{url('listmodels')}}" class="btn btn-danger">Cancel</a>
		</form>
@endsection