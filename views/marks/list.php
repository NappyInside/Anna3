<script>

</script>

<style>

</style>
<!-- <div class="site-wrapper">
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
</div> -->

<!-- Bouton ajouter nouvel apprenti, redirige vers méthode ajouter -->
<form action="?ctrl=marks&action=ajouter" method="post">
	<input type="submit" class="button btn btn-info btn-md" value="Nouveau"/>
</form>

<h1>Interface de notation</h1>

<form action="?ctrl=marks&action=ajouter" method="post">

	<h3>Veuillez sélectionner une épreuve</h3>
	<div class="radio">
		<label><input required type="radio" name="idTest" value="1">Epreuve E4</label>
	</div>
	<div class="radio">
		<label><input required type="radio" name="idTest" value="2">Epreuve E6</label>
	</div>
<hr class="hr-dashed">

	<h3>Veuillez indiquer le candidat concerné</h3>
	<div class="row">
		<!-- Une div vide pour centrer les inputs suivants -->
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="form-group">
				<input required type="number" name="idApprentice" id="idApprentice" placeholder="idApprentice" class="form-control">
			</div>
		</div></div>
		<!-- 	<center><input required type="number" name="idApprentice" placeholder="idApprentice"/></center> -->

		<h3>Note Finale</h3>
		<div class="row">
			<!-- Une div vide pour centrer les inputs suivants -->
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="form-group">
					<input required type="number" name="mark" id="mark" placeholder="Note obtenue sur 20" class="form-control">
				</div>
			</div></div>
<hr class="hr-dashed">


			<form role = "form">
				<h3>Commentaires</h3>
				<div class="row">
					<!-- Une div vide pour centrer les inputs suivants -->
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
						<div class = "form-group">
							<textarea class = "form-control" name="comment" rows = "3" placeholder="Veuillez saisir un commentaire"></textarea>
							<!-- 				<center><input required type="submit" name="validateMark" value="Valider"></center> -->
						</div></div></div>
						<div class="wrapper">
							<span class="group-btn">
								<button class="btn btn-primary btn-md" required type="submit" name="validateMark">Valider</button>
							</span>
						</div>

					</form>

				</form><hr class="hr-dashed">

	<h1>Récapitulatif des notes des candidats</h1>

	<!-- Tableau responsive avec bordure et hover -->

	<div class="container-fluid table-responsive col-lg-8">
		<table class="table table-hover ">
			<!-- Entête de tableau -->
			<caption><h3>Récapitulatif des notes des candidats</h3></caption>
			<thead class="thead-default">
				<tr>
					<th>ID du candidat</th>
					<th>Nom du candidat</th>
					<th>Prénom du candidat</th>
					<th>ID du formateur</th>
					<th>Nom du formateur</th>
					<th>Numéro de l'épreuve</th>
					<th>Note obtenue</th>
					<th>Commentaire</th>
					<th>Suppression</th>
				</tr>
			</thead>


			<!-- Parcours de la liste des notes pour affichage -->
			<?php foreach($datas['marks'] as $mark): ?>
				<tr>
					<td><?=$mark->getIdApprentice(); ?></td>
					<td><?=$mark->getFirstName(); ?></td>
					<td><?=$mark->getLastName(); ?></td>
					<td><?=$mark->getIdFormer(); ?></td>
					<td><?=$mark->getName(); ?></td>
					<td><?=$mark->getIdTest(); ?></td>
					<td><?=$mark->getMark(); ?></td>
					<td><?=$mark->getComment(); ?></td>
					<td>
						<!-- Bouton supprimer note, redirige vers méthode supprimer -->
						<input type="submit" class="button btn btn-danger btn-md" data-toggle="modal" data-target="#fen_modal_<?=$mark->getIdApprentice(); ?>" value="Supprimer" />

						<form action="?ctrl=marks&action=supprimer" method="POST">
							<!-- Fenêtre modale -->
							<div class="modal fade" id="fen_modal_<?=$mark->getIdApprentice(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="fen_modal_<?=$mark->getIdApprentice(); ?>">Confirmation</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>La note sera supprimée définitivement. Voulez-vous confirmer ?</p>
										</div>
										<div class="modal-footer">
											<input required type="hidden" value='<?=$mark->getIdApprentice(); ?>' name="id_apprentice" />
											<input required type="hidden" value='<?=$mark->getIdFormer(); ?>' name="id_former" />
											<input type="submit" name="supprimer" class="button btn btn-danger btn-md" value="Supprimer"/>
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