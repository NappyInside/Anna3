<h1>Liste des formateurs</h1>

<!-- Bouton ajouter nouvel formateur, redirige vers méthode ajouter -->
<form  action="?ctrl=formers&action=add" method="post">
	<input type="image" src="contents/img/ajouter.png" width="50" height="50">
</form>

<!-- Tableau responsive avec bordure et hover -->
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<!-- Entête de tableau -->
		<thead class="thead-default">
			<tr>
				<th>Rang</th>
				<th>Nom</th>
				<th>Mot de passe</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
		</thead>
		<!-- Parcours de la liste des formateurs pour affichage -->
		<?php foreach($datas['formers'] as $former): ?>
			<tr>
				<td><?=ucfirst($former->getRank()); ?></td>
				<td><?=$former->getName(); ?></td>
				<td><?=$former->getPassword(); ?></td>
				<td>
					<!-- Bouton modifier formateur, redirige vers méthode modifier -->
					<form  action="?ctrl=formers&action=update" method="POST">
						<input type="hidden" value="<?=$former->getIdFormer(); ?>" name="id_former" />
						<input type="image" src="contents/img/modifier.png" width="50" height="50" />
					</form>
				</td>
				<td>
					<!-- Bouton supprimer formateur, redirige vers méthode supprimer -->
					<form action="?ctrl=formers&action=delete" method="POST">
						<input type="hidden" value='<?=$former->getIdFormer(); ?>' name="id_former" />
						<input type="image" src="contents/img/supprimer.png" width="50" height="50" />
					</form>
				</td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>