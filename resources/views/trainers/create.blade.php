@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
	<form class="form-group" method="POST" action="/trainers">	
		@csrf {{-- para proteger el formulario --}}
		<div class="form-group"> 
			<label for ="">Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection

{{--  
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">   

		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control">
		</div>
		<button type="submit" class=btn btn-primary>Guardar</button>
	</div>
</body>
</html>--}}