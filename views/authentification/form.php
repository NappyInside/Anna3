<form action="?ctrl=authentification&action=connect" method="POST">
	<label for="username">Nom d'utilisateur :</label>
	<input required type="text" name="username" class="form-control" placeholder ="prenom.nom" />
	<br /><br />
	<label for="password">Mot de passe :</label>
	<input required type="password" name="password" class="form-control" placeholder="*****" />
	<br /><br />
	<!-- <input type="submit" value="Se connecter" /> -->
	<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
</form>
