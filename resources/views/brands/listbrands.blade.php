
@extends('layout')

@section('content')
	<h1>List Brands</h1>
  <hr>
  <div class="table-responsive text-nowrap">
  <a href="{{url('createbrand')}}" class="btn btn-info margin-left-90">Add Brand</a>
	<table class="table table-bordered table-hover text-alignment">
    <thead>
      <tr>
        <th class="text-alignment">ID</th>
        <th class="text-alignment">Name</th>
        <th class="text-alignment">Logo</th>
        <th class="text-alignment">Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($brands as $brand)
    	
        <!--Table-->
            <tr>
              <th scope="row"  class="text-alignment">{{$brand->id}}</th>
              <td>{{$brand->name}}</td>
              <td><img class="listimage" src="{{ asset('storage/brands/'.$brand->logo) }}"></td>
              <td><a href="{{ url('editbrand/'.$brand->id )}}" class="btn btn-primary">Edit</a> /
        	<a href="/deletebrand/{{$brand->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this brand?')" >Delete</a></td>
            </tr>
           
          
        <!--Table-->
      
</section>
      
      @endforeach
    </tbody>
  </table>
  </div>
@endsection