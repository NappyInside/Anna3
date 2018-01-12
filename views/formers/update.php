<?php 
	$former = $datas['former']; 
?>

<h1>Modifier les informations d'un formateur</h1>

<!-- Après appui sur Modifier renvoie vers validation_modification.php -->
<form action="?ctrl=formers&action=update" method="POST" />
<div class="container">
	<h3>Rang</h3>
	<!-- <input required type="hidden" value='<?=$former->getIdFormer(); ?>' name="id" /> -->
	<!-- Vérifie quel rang est sélectionné -->
<?php foreach($datas['ranks'] as $rank): ?>
		<div class="radio">
			<label><input required type="radio" name="rang" value='<?=$rank; ?>'<?php if($former->getRank() == $rank) echo ' checked'; ?>><?=ucfirst($rank); ?></label>
		</div>
<?php endforeach; ?>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Champ de saisie qui sera enregistré dans la base de données -->
			<div class="form-group">
				<input required type="text" value="<?=$former->getName(); ?>" name="nom" placeholder="Nom du Formateur" class="form-control"></br></br>
				<input required type="password" value="<?=$former->getPassword(); ?>" name="password" placeholder="Mot de passe" class="form-control">
			</div>
		</div>
	</div>


	<div class="wrapper">
		<span class="group-btn"> 
			<button class="btn btn-warning btn-md" type="submit" name="modifier">Modifier</button>    
		</span>
	</div><br>

	<div class="wrapper">
		<span class="group-btn">
			<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost/Anna3/public/index.php?ctrl=formers')" value="annuler">Annuler</button>
		</span>
	</div>
</form>