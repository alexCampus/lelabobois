<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
	<meta name="author" content="Alexandre De Pembroke">


	<title>Upload Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
#portfolio { width:100%; margin:20px 25px 10px 25px; }
.tile { float:left; min-height:100px; max-height:300px; width:20%; border:1px #fff solid; }
.tile:hover { opacity: 0.8; }
button{margin-top: 5px;}
img{padding:10px; border-bottom: 1px #ccc dotted; text-decoration: none; font-family: Arial; text-transform:uppercase; font-size: 12px; color: #333; display:block; float:left; width: 200px; height: 150px}
img:hover { cursor:pointer; background: #333; color:#eee; }
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Branding Image -->
				<a class="navbar-brand" href="{{ url('/') }}">
					Le Labo Bois
				</a>
			</div>

			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<div class="container">
		<div class="col-lg-offset-4 col-lg-4"> 
			<center><h1>Upload File</h1></center>
			<form action="/store" enctype="multipart/form-data" method="post">
				{{ csrf_field() }}
				<div class="input-group">
					<label class="input-group-btn">
						<span class="btn btn-primary">
	    					Upload Image 
	    					<input type="file" name="image" style="display: none;">
							
						</span>
					</label>
					<input type="text" class="form-control" readonly>
				</div>
				<br>
				<label class="radio-inline">
			      	<input type="radio" name="optradio" value="menuiserie" required>Menuiserie
			    </label>
			    <label class="radio-inline">
			      	<input type="radio" name="optradio" value="charpente" required>Charpente
			    </label>
			    <label class="radio-inline">
			      	<input type="radio" name="optradio" value="couverture" required>Couverture
			    </label>
				<label class="radio-inline">
					<input type="radio" name="optradio" value="constructionBois" required>Construction Bois
				</label>
				<label class="radio-inline">
					<input type="radio" name="optradio" value="renovation" required>Rénovation
				</label>
				<label class="radio-inline">
					<input type="radio" name="optradio" value="zinguerie" required>Zinguerie
				</label>
				<br><br>
				<button type="submit" class="btn btn-default">Upload</button>
				
			</form>
			<hr>
			<form class="form-group" method="post" action="/upload">
				{{ csrf_field() }}
			  	<label for="sel1">Selection Categorie</label>
			  	<select class="form-control" name="categorie">
			  		<option value="all">Toutes</option>
			    	<option value="menuiserie">Menuiserie</option>
					<option value="constructionBois">Construction Bois</option>
			    	<option value="charpente">Charpente</option>
				    <option value="couverture">Couverture</option>
					<option value="renovation">Rénovation</option>
					<option value="zinguerie">Zinguerie</option>
			  	</select>
			  	<button type="submit" class="btn btn-default">Refresh</button>
			</form>
		</div>
		
	</div>

	<div class="container-fluid">
		<div class="row">
			<div id="portfolio">
			    @isset($images)
					@foreach ($images as $image)
			  			<div class="tile bcards all">
							<img src="{{ url($image)}}">
							<form method="post" action="/remove">
								{{ csrf_field() }}
								<input type="hidden" name="img" value="{{$image}}">
								<button type="submit" class="btn btn-xs btn-danger">Supprimer</button>
							</form>
			  			</div>
					@endforeach
				@endisset
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		var selectedClass = "";
		$("p").click(function(){
		selectedClass = $(this).attr("data-rel");
    $("#portfolio").fadeTo(100, 0.1);
		$("#portfolio div").not("."+selectedClass).fadeOut();
    setTimeout(function() {
      $("."+selectedClass).fadeIn();
      $("#portfolio").fadeTo(500, 1);
    }, 500);
		
	});
  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }
      });
  });
  
});
</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>