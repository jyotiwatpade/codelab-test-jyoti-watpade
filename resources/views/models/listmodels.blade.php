
@extends('layout')

@section('content')
	<h1>List Models</h1>
  <hr>
  <div class="table-responsive text-nowrap">
  <a href="{{url('createmodel')}}" class="btn btn-info margin-left-90">Add Model</a>
	<table id="myModelTable" class="table table-bordered table-hover text-alignment">
    <thead>
      <tr>
        <th class="text-alignment">ID</th>
        <th class="text-alignment">Brand Name</th>
        <th class="text-alignment">Model Name</th>
        <th class="text-alignment">Manufacuring Year</th>
        <th class="text-alignment">Image</th>
        <th class="text-alignment">Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($models as $model)
          <tr>
              <th class="text-alignment" scope="row">{{$model->model_id }}</th>
              <td>{{$model->name}}</td>
              <td>{{$model->model_name}}</td>
              <td>{{$model->manufacturing_year}}</td>
              <td>
                @if($model->image)
                <img class="listimage" src="{{ asset('storage/models/'.$model->image) }}">
                @endif
              </td>
              <td><a href="{{ url('editmodel/'.$model->model_id  )}}" class="btn btn-primary">Edit</a> /
        	<a href="{{ url('deletemodel/'.$model->model_id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this model?')" >Delete</a></td>
            </tr>
           
          
        <!--Table-->
      
</section>
      
      @endforeach
    </tbody>
  </table>
  </div>
@endsection