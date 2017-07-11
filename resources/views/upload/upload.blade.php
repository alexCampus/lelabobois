<!DOCTYPE html>
<html>
<head>
	<title>Upload Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="col-lg-offset-4 col-lg-4"> 
		<center><h1>Upload File</h1></center>
		<form action="/store" enctype="multipart/form-data" method="post">
			{{ csrf_field() }}
			<input type="file" name="image">
			<br>
			<label class="radio-inline">
		      	<input type="radio" name="optradio" value="menuiserie">Menuiserie
		    </label>
		    <label class="radio-inline">
		      	<input type="radio" name="optradio" value="charpente">Charpente
		    </label>
		    <label class="radio-inline">
		      	<input type="radio" name="optradio" value="couverture">Couverture
		    </label>
			<br><br>
			<input type="submit" name="Upload">
			
		</form>
		<hr>
	</div>

	<div class="col-lg-offset-4 col-lg-4">
	<h1>Liste Photo</h1>
	<hr>
		<form class="form-group" method="post" action="/upload">
		{{ csrf_field() }}
		  	<label for="sel1">Selection Categorie</label>
		  	<select class="form-control" name="categorie">
		  		<option value="all">Toutes</option>
		    	<option value="menuiserie">Menuiserie</option>
		    	<option value="charpente">Charpente</option>
			    <option value="couverture">Couverture</option>
		  	</select>
		  	<input type="submit" name="Refresh">
		</form>
		@isset($images)
			@foreach ($images as $image)
				<img style="max-width: 200px;" src="{{ url($image)}}">
				<form method="post" action="/remove">
					{{ csrf_field() }}
					<input type="hidden" name="img" value="{{$image}}">
					<button type="submit" class="btn btn-xs btn-danger">Supprimer</button>
					
				</form>
			@endforeach
		@endif
	</div>

	
</body>
</html>