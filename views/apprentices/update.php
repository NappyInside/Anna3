<?php 
	$apprentice = $datas['apprentice']; 
?>

<script>

</script>

<style>

</style>

<h1>Modifier les informations d'un apprenti</h1>

<!-- Après appui sur Modifier renvoie vers validation_modification.php -->
<form action="?ctrl=apprentices&action=update" method="POST" />
<div class="container">
	<h3>Option</h3>
<!-- Vérifie quelle option est sélectionnée -->
<?php foreach($datas['options'] as $option): ?>
		<div class="radio">
			<label><input required type="radio" name="option" value='<?=$option->getIdOption(); ?>'<?php if($apprentice->getIdOption() == $option->getIdOption()) echo ' checked'; ?>><?=$option->getName(); ?></label>
		</div>
<?php endforeach; ?>


		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Champ de saisie qui sera enregistré dans la base de données -->
			<div class="form-group">
				<input required type="text" value="<?=$apprentice->getFirstName(); ?>" name="nom" placeholder="Nom du Candidat" class="form-control"></br>
				<input required type="text" value="<?=$apprentice->getLastName(); ?>" name="prenom" placeholder="Prénom du Candidat" class="form-control"></br>
				<input required type="mail" value="<?=$apprentice->getEmail(); ?>" name="email" placeholder="Adresse mail du Candidat" class="form-control">
			</div>
		</div>
	</div></br>

		<div class="wrapper">
		<span class="group-btn"> 
			<button class="btn btn-warning btn-md" type="submit" name="modifier">Modifier</button>    
		</span>
	</div><br>

		<div class="wrapper">
		<span class="group-btn">
			<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost/Anna3/public/index.php?ctrl=apprentices')" value="Annuler">Annuler</button>
		</span>
	</div>
</form>