<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{url('Crud/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('Crud/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('Crud/assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<a class="btn btn-primary" href="{{url('table')}}">All data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				@if($errors ->any())
				<p class="alert alert-danger">{{ $errors ->first()}}<button class="close" data-dismiss = "alert">&times;</button></p>
				@endif
				<form action="{{url('crud-all')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Name</label>
						<input  name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input  name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell"  class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname"  class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo"  class="form-control" type="file">
					</div>
					<div class="form-group">
						<input   class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{url('Crud/assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('Crud/assets/js/popper.min.js')}}"></script>
	<script src="{{URL::to('Crud/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('Crud/assets/js/custom.js')}}"></script>
</body>
</html>