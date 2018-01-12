<!DOCTYPE html>

<html>
<head>
	<title>ANNA - <?=$this->getTitle(); ?></title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="contents/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="contents/css/style.css">




</head>

<body>
	<video autoplay loop poster class="bg" src="contents/video/bokeh2.mp4">
	</video>
	<div class="bg-filter">
	</div>
	<div class="intro-text">
	</div>


	<!-- Sidebar -->
	<nav class = "navbar navbar-light fixed-top navbar-toggleable-md">

 <!--   <div class = "navbar-header"> -->
      <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<!--          <span class = "sr-only">Toggle navigation</span> -->
         <span class = "navbar-toggler-icon"></span>
<!--          <span class = "icon-bar"></span>
         <span class = "icon-bar"></span> -->
      </button>

      <a class = "navbar-brand" href = "#"></a>
   <div class = "collapse navbar-collapse" id = "navbarNav">

      <ul class = "nav navbar-nav mr-auto">
         <li class="nav-item active"><a class="nav-link" href = "http://localhost/Anna3/public/index.php">Accueil</a></li>
         <li class="nav-item"><a class="nav-link" href="http://localhost/Anna3/public/index.php?ctrl=formers">Formateurs </a></li>
         <li class="nav-item"><a class="nav-link" href="http://localhost/Anna3/public/index.php?ctrl=apprentices">Apprentis </a></li>
         <li class="nav-item"><a class="nav-link" href="http://localhost/Anna3/public/index.php?ctrl=marks">Notes </a></li>
         <li class="nav-item"><a class="nav-link" href="http://localhost/Anna3/public/index.php?ctrl=authentification&action=disconnect">Déconnexion </a></li>
      </ul>
<!--    </div> -->

</nav>


	<!-- Contenu -->
	<header>
		<div class="container-fluid">
			<div class="row">
				<h1 class="form-signin-heading">
					<!-- Page de connexion -->
				</h1>
			</div>
		</div>
	</header>

	<main>
		<?php include_once $content; ?>
	</main>
</div>

<!-- Footer -->
<div class="mastfoot fixed-bottom">
	<p>2017 &copy; ANNA : développé par Miniscloux Anthony.</p>
</div>

		<!-- Menu Toggle Script -->
<!-- <script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script> -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
	<script src="contents/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
	<!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
	<script src="contents/js/bootstrap.min.js"></script>

	</body>
	</html>
