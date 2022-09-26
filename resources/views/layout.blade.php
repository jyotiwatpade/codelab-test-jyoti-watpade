<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
	
	<!-- search functionality -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script  src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

</head>
<body>
<div class="header">
	@section('header')


	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">CodeLab Technology</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	      	<!-- <li><a href="{{url('createbrand')}}">Create Brand</a></li> -->
	      	<li><a href="{{url('listbrands')}}">List Brand</a></li>
	      	<!-- <li><a href="{{url('createmodel')}}">Create Model</a></li> -->
	      	<li><a href="{{url('listmodels')}}">List Models</a></li>
	        
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        
	        <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	@show
</div>
<div class="content">
	@section('content')
	
	@show
</div>
<div class="footer">
	@section('footer')
	<!-- <h1>Footer Part</h1> -->
	<script>
$(document).ready(function(){
  $("#manufacturing_year").datepicker({
     format: "yyyy",
     viewMode: "years", 
     minViewMode: "years",
     autoclose:true
  }); 

  $(document).ready( function () {
	    $('#myModelTable').DataTable();
	} );  
});
</script>

	@show
</div>
</body>
</html>