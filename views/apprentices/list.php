<h1>Liste des candidats</h1>

<!-- Bouton ajouter nouvel apprenti, redirige vers méthode ajouter -->
<form action="?ctrl=apprentices&action=add" method="post">
	<input type="submit" class="button btn btn-info btn-md" value="Nouveau"/>
</form>

<!-- Bouton import csv, redirige vers méthode  -->
<form  action="?ctrl=apprentices&action=csv" method="post">
	<input type="image" src="contents/img/csv.jpg" width="50" height="50">
</form>

<!-- Tableau responsive avec bordure et hover -->
<div class="table-responsive">
	<table class="table table-bordered table-hover table-condensed">
		<!-- Entête de tableau -->
		<thead class="thead-default">
			<tr>
				<th>Option</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse Mail</th>
				<th style="text-align: center;">Modification</th>
				<th style="text-align: center;">Suppression</th>
			</tr>
		</thead>

		<!-- Parcours de la liste des apprentis pour affichage -->
		<?php foreach($datas['apprentices'] as $apprentice): ?>
			<tr>
				<td><?=$apprentice->getOption(); ?></td>
				<td><?=$apprentice->getFirstName(); ?></td>
				<td><?=$apprentice->getLastName(); ?></td>
				<td><?=$apprentice->getEmail(); ?></td>
				<td style="text-align: center;">
					<!-- Bouton modifier apprenti, redirige vers méthode modifier -->
					<form  action="?ctrl=apprentices&action=update" method="POST">
						<input type="hidden" value="<?=$apprentice->getIdApprentice(); ?>" name="id_apprentice" />
						<input type="submit" class="button btn btn-warning btn-md" value="Modifier" />
					</form>
				</td>
				<td style="text-align: center;">

					<!-- Bouton supprimer apprenti, redirige vers méthode supprimer -->
					<!-- Insertion d'une fenêtre modale de confirmation à la suppression  #myModal -->
					<input type="submit" class="button btn btn-danger btn-md" data-toggle="modal" data-target="#fen_modal" value="Supprimer"/>

					<form action="?ctrl=apprentices&action=delete" method="POST">
						<div class="modal fade" id="fen_modal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="fen_modal">Confirmation</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>L'utilisateur sera supprimé définitivement. Voulez-vous confirmer ?</p>
									</div>
									<div class="modal-footer">
										<input type="hidden" value="<?=$apprentice->getIdApprentice(); ?>" name="id_apprentice" />
										<input type="submit" class="button btn btn-danger" value="Supprimer"/>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
									</div>
								</div>
							</div>
						</div>

					</form>
				</td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>
