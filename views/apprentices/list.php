<!-- Tableau responsive avec bordure et hover -->
<div class="container-fluid table-responsive col-lg-8">
	<table class="table table-hover">
		<caption><h1>Liste des candidats</h1></caption>
		<!-- Entête de tableau -->
		<thead class="thead-default">
			<tr>
				<th>Option</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse Mail</th>
				<th>Modification</th>
				<th>Suppression</th>
			</tr>
		</thead>

		<!-- Parcours de la liste des apprentis pour affichage -->
		<?php foreach($datas['apprentices'] as $apprentice): ?>
			<tr>
				<td><?=$apprentice->getOption(); ?></td>
				<td><?=$apprentice->getFirstName(); ?></td>
				<td><?=$apprentice->getLastName(); ?></td>
				<td><?=$apprentice->getEmail(); ?></td>
				<td>
					<!-- Bouton modifier apprenti, redirige vers méthode modifier -->
					<form  action="?ctrl=apprentices&action=update" method="POST">
						<input type="hidden" value="<?=$apprentice->getIdApprentice(); ?>" name="id_apprentice" />
						<input type="submit" class="button btn btn-warning btn-md" value="Modifier" />
					</form>
				</td>
				<td>

					<!-- Bouton supprimer apprenti, redirige vers méthode supprimer -->
					<!-- Insertion d'une fenêtre modale de confirmation à la suppression  #myModal -->
					<input type="submit" class="button btn btn-danger btn-md" data-toggle="modal" data-target="#fen_modal_<?=$apprentice->getIdApprentice(); ?>" value="Supprimer"/>

					<form action="?ctrl=apprentices&action=delete" method="POST">
						<div class="modal fade" id="fen_modal_<?=$apprentice->getIdApprentice(); ?>"" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="fen_modal_<?=$apprentice->getIdApprentice(); ?>"">Confirmation</h5>
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

	<div class="row">
		<!-- Bouton ajouter nouvel apprenti, redirige vers méthode ajouter -->
		<form action="?ctrl=apprentices&action=add" method="post">
			<input type="submit" class="button btn btn-info btn-md" value="Nouveau"/>
		</form></div>

		<div class="row">
			<!-- Bouton import csv, redirige vers méthode  -->
			<form  action="?ctrl=apprentices&action=csv" method="post">
				<input type="submit" class="button btn btn-success btn-md" value="Importer CSV">
			</form></div>
		</div>
