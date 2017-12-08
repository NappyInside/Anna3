<!DOCTYPE html>

<html>
	<head>
		<title>ANNA - <?=$this->getTitle(); ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="contents/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="contents/css/style.css">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- <script>
			function navDisplay()
			{
				if(document.getElementById('nav-ul').style.visibility == 'visible')
				{
					document.getElementById('nav-ul').style.visibility = 'hidden';
					document.getElementById('nav-button').innerHTML = '&#9650;';
				}
				else
				{
					document.getElementById('nav-ul').style.visibility = 'visible';
					document.getElementById('nav-button').innerHTML = '&#9660;';
				}
			}
		</script> -->
	</head>

	<body>
<!-- onload="navDisplay();" -->


<div class="container">
	<!-- <div id="wrapper"> -->

	<!-- Sidebar -->
	    <nav class="navbar navbar-inverse navbar-fixed-bottom">
	    	<div class="navbar-header">
      			<a class="navbar-brand" href="#">Menu</a>
      		</div>
      		<div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/my-app/anna/public/index.php?ctrl=formers">Formateurs<!--<span class="sr-only">(current)</span>--></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/my-app/anna/public/index.php?ctrl=apprentices">Apprentis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/my-app/anna/public/index.php?ctrl=marks">Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/my-app/anna/public/index.php?ctrl=authentification&action=disconnect">Déconnexion</a>
          </li>
        </ul>
      </div>
      	</nav>
</div>
	<!-- /#sidebar-wrapper -->
	<header>
		<div class="container-fluid">
		<h1 class="form-signin-heading">
			Application : ANNA
		</h1>
	</div>
	</header>	

		<main>
			<?php include_once $content; ?>
		</main>
		</div> <!-- /container -->
		<!-- <nav>
			<ul id="nav-ul">
				<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=formers">Formateurs</a></li>
				<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=apprentices">Apprentis</a></li>
				<li id="nav-ul-li-center"></li>
				<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=marks">Notes</a></li>
				<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=authentification&action=disconnect">Déconnexion</a></li>
			</ul>

			<button id="nav-button" onclick="navDisplay();">&#9650;</button>
		</nav> -->
	<div class="mastfoot">
	<div class="inner">
		<p>2017 &copy; ANNA : développé par Miniscloux Anthony.</p>
	</div>
</div>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
});
</script>
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
