<p>La note sera supprimée définitivement. Voulez-vous confirmer ?</p>
<?=$_POST['supprimer'];?>
</div>
<div class="modal-footer">
	<input required type="hidden" value='<?=$mark->getIdApprentice(); ?>' name="id_apprentice" />
	<input required type="hidden" value='<?=$mark->getIdFormer(); ?>' name="id_former" />
	<input type="submit" name="supprimer" class="button btn btn-danger btn-md" value='<?=$mark->getIdApprentice(); ?>'/>
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
