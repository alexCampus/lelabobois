<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Le Labo Bois, c'est un charpentier spécialiste des metiers du bois à Grenoble.">
    <meta name="author" content="Alexandre De Pembroke">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>le Labo Bois - Grenoble</title>
	
	<link rel="alternate" href="http://www.lelabobois.fr" hreflang="fr" />
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
	<script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->
</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#activite"> <img class="img_scroll" src="{{asset('img/icon/circle.png')}}" alt="icon scroll"> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">LE LABO BOIS</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="/#activite">Domaine d'Activités</a></li>
					<li class="menuItem"><a href="#screen">Le Labo Bois en Image</a></li>
					<li class="menuItem"><a href="#about">Présentation</a></li>
					<li class="menuItem"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- Activite -->
	<div id="activite" >
		<div class="content-section-b">
			<div id="app">
				<router-view></router-view>
			</div>
		</div>
	</div>
	

	<!-- Screenshot -->
	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Le Labo Bois en Image</h2>
				<p class="lead" style="margin-top:0">De la réalisation à la pose.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              	<div id="owl-demo" class="owl-carousel">
				@foreach($images as $image)
					<a href="{{$image}}" class="image-link">
						<div class="item">
							<img  class="img-responsive img-rounded" src="{{$image}}" alt="Owl Image">
						</div>
					</a>
					
				@endforeach
              	</div>       
			</div>
        </div>
	</div>

		<!-- About -->
    <div id ="about" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="{{ asset('img/about.JPG') }}" alt="photo de profil du labo bois charpentier à Grenoble">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h1 class="h1_home">Julian Vandevelde <br>Le Labo Bois</h1>
					<div class="sub-title lead3">La passion et l’expertise à votre service</div>
                    <p class="lead justify">
						Investi dans le milieu de la construction bois depuis une dizaine d’année dans différentes structures, j’ai monté Le Labo bois au début de l’année 2017, pour répondre à une attente de clientèle de plus en plus informée, intéressée et experte dans la construction durable.
					</p>
					<p class="lead justify">
						Je suis titulaire d’un Brevet professionnel de Charpente Bois et de multiples formations tant en terme d’étanchéité, de sécurité et de conception. J’ai surtout acquis durant ces dernières années de solides bases en charpente couverture et zinguerie. Ayant été chef de Chantier et responsable de production, je saurais piloter et gérer au jour le jour votre projet jusqu’à son achèvement.
					</p>
					<p class="lead justify">
						Ma passion pour le bois et le travail bien fait, me pousse vers l’entreprenariat et le conseil client. Ma motivation première est de pouvoir revenir aux fondamentaux de mon métier qui est de construire de façon pérenne, mais aussi d’entretenir un rapport d’échange humain et de conseil envers la clientèle afin de pouvoir répondre à une demande avec un travail de qualité.
					</p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>
	
	<!-- Banner Download -->
	<div id="downloadlink" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
			 	</div>
			</div>
		</div>
	</div>
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contactez Moi</h2>
				<p class="lead" style="margin-top:0">Julian Vandevelde - le Labo Bois</p>
			</div>
			@if(Session::has('flash_message'))
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
    				<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
    			</div>
			@else
				<form role="form" action="/send" method="POST" >
					<input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					<div class="col-md-6">
						<div class="form-group">
							<label for="InputName">Votre Nom</label>
							<div class="input-group">
								<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Votre Nom" required>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>

						<div class="form-group">
							<label for="InputTel">Votre Téléphone</label>
							<div class="input-group">
								<input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" name="InputTel" id="InputTel" placeholder="Votre Téléphone" required>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="InputEmail">Votre Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Votre Email" required  >
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="InputMessage">Message</label>
							<div class="input-group">
								<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
								<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
							</div>
						</div>

						<input type="submit" name="submit" id="submit" value="Envoyer" class="btn wow tada btn-embossed btn-primary pull-right">
					</div>
				</form>
			@endif

			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Me Situer</h3>
					
						<div class="google-maps">
							<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=12&center=45.1885%2C5.7245&key=AIzaSyB_3ik8Sc-A4Ojd3BGkfzSYBb_r5_VLnzE" allowfullscreen></iframe>
						</div>
						<p class="lead">
						38100 Grenoble <br>
						<a href="tel:+33767028992">Téléphone: <i class="fa fa-phone" aria-hidden="true"></i> 07.67.02.89.92</a><br>
						<a href="https://www.facebook.com/pg/Le-LaBo-Bois-1354459914643087"><i class="fa fa-facebook-square fa-2x"> </i></a>
					</p>
					</address>
				</div>
			</div>
		</div>
	</div>

    <footer>
      <div class="container">
        <div class="row">
           	<h3 style="text-align: center">Partenaire</h3>
          <div class="col-md-7">
           		<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon">
							<a href="https://www.cabestan.fr/">
								<img src="{{ asset('img/icon/icoCabestan.jpg') }}" alt="Cabestan coopérative du batiment (charpente) à Grenoble">
							</a>
						</div>
							<h3>Cabestan</h3>
							<p class="lead">Coopérer pour mieux construire</p>
							<p>Le labo bois fait partie de la coopérative d’entrepreneurs du bâtiment Cabestan et partage ses engagements dans la construction, mais aussi ses valeurs d’échanges humains et de coopération.</p>
					</div>
				</div>
          </div> <!-- /col-xs-7 -->
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<!-- StikyMenu -->
	<script src="{{ asset('js/stickUp.min.js') }}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('js/jquery.corner.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/uiMorphingButton_inflow.js') }}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	
</body>

</html>