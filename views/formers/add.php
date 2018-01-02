<h1>Ajouter un nouveau formateur</h1>

<!-- Après appui sur Ajouter renvoie vers validation_creation.php -->
<form action="?ctrl=formers&action=add" method="POST" />

<div class="container">
	<h3>Rang</h3>
	<!-- Le checked permet de vérifier la valeur sur la base d'un booléen -->
	<?php foreach($datas['ranks'] as $rank): ?>
		<!-- <input required type="radio" value='<?=$rank; ?>' name="rang"><?=ucfirst($rank); ?></input> -->
		<div class="radio">
			<label><input required type="radio" name="rang" value='<?=$rank; ?>'><?=ucfirst($rank); ?></label>
		</div>
	<?php endforeach; ?>

	<br/><br/>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Champ de saisie qui sera enregistré dans la base de données -->
			<div class="form-group">
				<input required type="text" value="" name="nom" placeholder="Nom du Formateur" class="form-control"></br></br>
				<input required type="password" value="" name="password" placeholder="Mot de passe" class="form-control">
			</div>
		</div>
	</div>


	<!-- <input type="submit" name="ajouter" value="Ajouter" /> -->
	<!-- Bouton valider la création -->
	<div class="wrapper">
		<span class="group-btn"> 
			<button class="btn btn-primary btn-md" type="submit" name="ajouter">Ajouter</button>    
		</span>
	</div><br>
	<div class="wrapper">
		<span class="group-btn">
			<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost:81/Anna3-dev-cfai/public/index.php?ctrl=formers')" value="Annuler">Annuler</button>
		</span>
	</div>
</form>