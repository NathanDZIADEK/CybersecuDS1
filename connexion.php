<fieldset>
<legend>Information de connexion</legend>
<form method="POST" action="recupConnexion.php">
<p>
<label>Nom: </label>
<input type="text" name="nom" maxlength="30" required>
</p>
<p>
<label>Email: </label>
<input type="text" name="email" maxlength="50" required>
</p>
<p>
<label>Age: </label>
<input type="text" name="age" maxlength="30" required>
</p>
<p>
<label>Commentaire: </label>
<Textarea type="commentaire" name="commentaire" rows="10" cols="60" null="no" placeholder="Description..."></textarea>
</p>
<p>
<div class="bouton">
<input type="submit" value="Ajouter" name="ajout" null="no"/>
</div>

</form>
</fieldset>