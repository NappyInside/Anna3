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

	<input type="submit" name="importer" value="Importer" />
</form>