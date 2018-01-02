<h1>Liste des formateurs</h1>

<!-- Bouton ajouter nouvel formateur, redirige vers méthode ajouter -->
<form  action="?ctrl=formers&action=add" method="post">
	<input type="submit" class="button btn btn-info btn-md" value="Nouveau"/>
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
						<input type="submit" class="button btn btn-warning btn-md" value="Modifier"/>
					</form>
				</td>
				<td>
					<!-- Bouton supprimer formateur, redirige vers méthode supprimer -->
					<input type="submit" class="button btn btn-danger btn-md" data-toggle="modal" data-target="#fen_modal" value="Supprimer"/>
					<form action="?ctrl=formers&action=delete" method="POST">
						<!-- Fenêtre modale -->
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
										<input type="hidden" value='<?=$former->getIdFormer(); ?>' name="id_former" />
										<input type="submit" class="button btn btn-danger btn-md" value="Supprimer"/>
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
