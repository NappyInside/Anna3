<script>

</script>

<style>

</style>
<div class="site-wrapper">
	<div class="site-wrapper-inner">

		<div class="cover-container">
			<div class="masthead clearfix">
				<div class="inner">
					<h3 class="masthead-brand">Interface des notes</h3>
					<nav>
						<ul class="nav masthead-nav">
							<li class="active"><a href="http://localhost/my-app/anna/public/index.php?ctrl=formers">Formateurs</a></li>
							<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=apprentices">Apprentis</a></li>
							<li><a href="http://localhost/my-app/anna/public/index.php?ctrl=authentification&action=disconnect">Déconnexion</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<h1>Noter un apprenti du CFAI84</h1>

<form action="?ctrl=marks&action=ajouter" method="post">

	<h3>Choisir une épreuve</h3>
	<table>

		<tr>
			<td class="whiteStyle">Epreuve</td>
			<td class="whiteStyle"><label>E4</label><input required type="radio" name="idTest" value="1"></td>
			<td class="whiteStyle"><label>E6</label><input required type="radio" name="idTest" value="2"></td>
		</tr>

	</table>

	<hr/>

	<center><h3>Renseignements</h3></center>

	<center><input required type="number" name="idApprentice" placeholder="numéro candidat"/></center>

	<center><h3>Note Finale</h3>
	<label><input required type="number" step="0.01" min="0" max="20" name="mark"/> /20</label></center>

	<hr/>

	<center><h3>Commentaires</h3></center>
	<center><textarea name="comment"></textarea></center>

	<center><input required type="submit" name="validateMark" value="Valider"/></center>

</form>

<h1>Liste des notes des apprentis du CFAI84</h1>

<table>
	<tr>
		<th>Apprenti</th>
		<th>Formateur</th>
		<th>Test</th>
		<th>Note</th>
		<th>Commentaire</th>
		<th>Suppression</th>
	</tr>

<?php foreach($datas['marks'] as $mark): ?>
	<tr>
		<td><?=$mark->getIdApprentice(); ?></td>
		<td><?=$mark->getIdFormer(); ?></td>
		<td><?=$mark->getIdTest(); ?></td>
		<td><?=$mark->getMark(); ?></td>
		<td><?=$mark->getComment(); ?></td>
		<td>
			<!-- Bouton supprimer note, redirige vers méthode supprimer -->
			<form action="?ctrl=marks&action=supprimer" method="POST">
			<input required type="hidden" value='<?=$mark->getIdApprentice(); ?>' name="id_apprentice" />
			<input required type="hidden" value='<?=$mark->getIdFormer(); ?>' name="id_former" />
			<input type="image" src="contents/img/supprimer.png" width="50" height="50" />
			</form>
		</td>
	</tr>
<?php endforeach; ?>

</table>
