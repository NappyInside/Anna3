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
	<video autoplay loop poster class="bg" src="http://static.videezy.com/system/resources/previews/000/000/328/original/bokeh2.mp4">
	</video>
	<div class="bg-filter">
	</div>
	<div class="intro-text">
	</div>


	<!-- Sidebar -->
	<nav class = "navbar navbar-default navbar-fixed-bottom" role = "navigation">

   <div class = "navbar-header">
      <button type = "button" class = "navbar-toggle"
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>

      <a class = "navbar-brand" href = "#">ANNA</a>
   </div>

   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">

      <ul class = "nav navbar-nav">
         <li class = "active"><a href = "http://localhost/Anna3-dev-cfai/public/index.php">Accueil</a></li>
         <li><a href="http://localhost/Anna3-dev-cfai/public/index.php?ctrl=formers">Formateurs </a></li>
         <li><a href="http://localhost/Anna3-dev-cfai/public/index.php?ctrl=apprentices">Apprentis </a></li>
         <li><a href="http://localhost/Anna3-dev-cfai/public/index.php?ctrl=marks">Notes </a></li>
         <li><a href="http://localhost/Anna3-dev-cfai/public/index.php?ctrl=authentification&action=disconnect">Déconnexion </a></li>

<!--          <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               Java
               <b class = "caret"></b>
            </a>

            <ul class = "dropdown-menu">
               <li><a href = "#">jmeter</a></li>
               <li><a href = "#">EJB</a></li>
               <li><a href = "#">Jasper Report</a></li>

               <li class = "divider"></li>
               <li><a href = "#">Separated link</a></li>

               <li class = "divider"></li>
               <li><a href = "#">One more separated link</a></li>
            </ul>

         </li> -->

      </ul>
   </div>

</nav>

	<!-- Footer -->
	<div class="mastfoot navbar-fixed-bottom">
		<p>2017 &copy; ANNA : développé par Miniscloux Anthony.</p>
	</div>

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
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="../../../../assets/js/vendor/popper.min.js"></script>
		<script src="../../../../dist/js/bootstrap.min.js"></script>

	</body>
	</html>
