<script>

</script>

<style>

</style>

<h1>Ajouter un nouvel apprenti</h1>

<!-- Après appui sur Ajouter renvoie vers validation_creation.php -->
<form action="?ctrl=apprentices&action=add" method="POST" />

<!-- Champ de saisie qui sera enregistré dans la base de données -->
<div class="container"><h3>Option</h3>
	<!-- Le checked permet de vérifier la valeur sur la base d'un booléen -->
	<?php foreach($datas['options'] as $option): ?>
		<!-- 	<input required type="radio" value='<?=$option->getIdOption(); ?>' name="option"><?=$option->getName(); ?></input> -->
		<div class="radio">
			<label><input required type="radio" name="option" value='<?=$option->getIdOption(); ?>'><?=$option->getName(); ?></label>
		</div>
	<?php endforeach; ?>
	<div class="row">
		<!-- Une div vide pour centrer les inputs suivants -->
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="form-group">
					<!-- Champ de saisie qui sera enregistré dans la base de données -->
				<input required type="text" value="" name="nom" placeholder="Nom du Candidat" class="form-control"><br>
					<!-- Champ de saisie qui sera enregistré dans la base de données -->
				<input required type="text" value="" name="prenom" placeholder="Prénom du Candidat" class="form-control"><br>
					<!-- Champ de saisie qui sera enregistré dans la base de données -->
				<input required type="mail" value="" name="email" placeholder="Adresse mail du candidat" class="form-control">
			</div>
		</div>
	</div>

	<div class="wrapper">
		<span class="group-btn"> 
			<button class="btn btn-primary btn-md" type="submit" name="ajouter">Ajouter</button>    
		</span>
	</div><br>


	<div class="wrapper">
		<span class="group-btn">
			<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost/Anna3/public/index.php?ctrl=apprentices')" value="Annuler">Annuler</button>
		</span>
	</div>


	<!-- Erreur d'adresse mail -->
<!-- <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div> -->

</form>