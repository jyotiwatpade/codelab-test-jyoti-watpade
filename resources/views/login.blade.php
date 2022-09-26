@extends('layout')

@section('content')
	<h1>Login page</h1>
  <hr>
	<form action="{{ url('loginsubmit')}}" method="POST">
    @if(Session::has('success'))
    <div class="alert alert-success"> {{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger"> {{Session::get('fail')}}</div>
    @endif
		@csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" placeholder="Enter email" name="email" id="email" value="{{old('email')}}">
    <span  class="text-danger">@error('email') {{$message}} @enderror</span> 
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
    <span  class="text-danger">@error('password') {{$message}} @enderror</span> 
 </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection