<script>

</script>

<style>

</style>

<h1>Ajouter un nouvel apprenti</h1>

<p>
	Les colonnes du fichier CSV doivent être les suivantes : Option, Nom, Prénom, Adresse mail
</p>

<!-- Après appui sur Ajouter renvoie vers validation_creation.php -->
<form action="?ctrl=apprentices&action=csv" method="POST" />
	<input required type="file" name="fichier" />

	<input type="submit" class="button btn btn-primary btn-md" name="importer" value="Importer" />

	<div class="wrapper">
	<span class="group-btn">
		<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost:81/Anna3-dev-cfai/public/index.php?ctrl=apprentices')" value="Annuler">Annuler</button>
	</span>
</div>
</form>
