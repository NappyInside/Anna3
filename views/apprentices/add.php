<script>

</script>

<style>

</style>

<h1>Ajouter un nouvel apprenti</h1>

<!-- Après appui sur Ajouter renvoie vers validation_creation.php -->
<form action="?ctrl=apprentices&action=add" method="POST" />
<h3>Option</h3>
<!-- Le checked permet de vérifier la valeur sur la base d'un booléen -->
<?php foreach($datas['options'] as $option): ?>
	<!-- 	<input required type="radio" value='<?=$option->getIdOption(); ?>' name="option"><?=$option->getName(); ?></input> -->
	<div class="radio">
		<label><input required type="radio" name="option" value='<?=$option->getIdOption(); ?>'><?=$option->getName(); ?></label>
	</div>
<?php endforeach; ?>
<br/><br/>

<!-- Champ de saisie qui sera enregistré dans la base de données -->
<!-- 	<input required type="text" value="" name="nom" /></br></br> -->
<div class="form-group">
	<input required type="text" value="" name="nom" placeholder="Nom du Candidat" class="form-control"></br></br>
</div>

<!-- Champ de saisie qui sera enregistré dans la base de données -->
<!-- 	<input required type="text" value="" name="prenom" /></br></br> -->
<div class="form-group">
	<input required type="text" value="" name="prenom" placeholder="Prénom du Formateur" class="form-control"></br></br>
</div>

<!-- Champ de saisie qui sera enregistré dans la base de données -->
<!-- 	<input required type="mail" value="" name="email" /></br></br> -->
<div class="form-group">
	<input required type="mail" value="" name="email" placeholder="Adresse mail du candidat" class="form-control"></br></br>
</div>
<!-- 	<input required type="submit" name="ajouter" value="Ajouter" /> -->
<div class="wrapper">
	<span class="group-btn"> 
		<button class="btn btn-primary btn-md" type="submit" name="ajouter">Ajouter Candidat</button>    
	</span>
</div>
</form>