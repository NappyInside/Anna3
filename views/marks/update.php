<?php 
	$mark = $datas['marks']; 
?>

<script>

</script>

<style>

</style>

<h1>Modifier les informations d'un apprenti</h1>

<!-- Après appui sur Modifier renvoie vers validation_modification.php -->
<form action="?ctrl=marks&action=update" method="POST" />
<div class="container">

	<h3>Epreuve</h3>
<!-- Vérifie quelle option est sélectionnée -->
<?php foreach($datas['tests'] as $test): ?>
		<div class="radio">
			<label><input required type="radio" name="test" value='<?=$test->getIdTest(); ?>'<?php if($apprentice->getIdOption() == $test->getIdOption()) echo ' checked'; ?>><?=$test->getName(); ?></label>
		</div>
<?php endforeach; ?>


		<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<!-- Champ de saisie qui sera enregistré dans la base de données -->
			<div class="form-group">
				<input required type="hidden" value="<?=$apprentice->getIdApprentice(); ?>" name="id" placeholder="Id du Candidat" class="form-control"></br>
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