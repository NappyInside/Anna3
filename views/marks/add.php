<script>

</script>

<style>

</style>

<h1>Interface de notation</h1>

<form action="?ctrl=marks&action=ajouter" method="post">

<div class="container">
	<h3>Veuillez sélectionner une épreuve</h3>
	<div class="radio">
		<label><input required type="radio" name="idTest" value="1">Epreuve E4</label>
	</div>
	<div class="radio">
		<label><input required type="radio" name="idTest" value="2">Epreuve E6</label>
	</div>


</div>

	<hr/>

	<h3>Veuillez indiquer le candidat concerné</h3>
	<div class="row">
		<!-- Une div vide pour centrer les inputs suivants -->
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
	<div class="form-group">
		<input required type="number" name="idApprentice" id="idApprentice" placeholder="idApprentice" class="form-control">
	</div>
	<!-- 	<center><input required type="number" name="idApprentice" placeholder="idApprentice"/></center> -->

	<h3>Note Finale</h3>
	<div class="form-group">
				<div class="col-lg-4"></div>
		<div class="col-lg-4">
		<input required type="number" name="mark" id="mark" placeholder="Note obtenue sur 20" class="form-control">
	</div>
</div>

		<form role = "form">
			<h3>Commentaires</h3>
			<div class = "form-group">
				<textarea class = "form-control" name="comment" rows = "3" placeholder="Veuillez saisir un commentaire"></textarea>
				<!-- 				<center><input required type="submit" name="validateMark" value="Valider"></center> -->
			</div>
			<div class="wrapper">
				<span class="group-btn">
					<button class="btn btn-primary btn-md" required type="submit" name="validateMark">Valider</button>
				</span>
			</div>

		</form>

	</form><hr /></div></div>
		<div class="wrapper">
		<span class="group-btn">
			<button class="btn btn-danger btn-md" onclick="window.location.replace('http://localhost/Anna3/public/index.php?ctrl=marks')" value="Annuler">Annuler</button>
		</span>
	</div>
</div>
	<hr/>
</form>