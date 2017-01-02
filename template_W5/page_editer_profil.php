<main class= container-fluid>
	
    <div class="row">
        <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1">
          <h1>Détails du profil</h1>
        </div>
    </div>

	<div class="row">
		<!-- SECTION RESUME DE PROFIL -->
		<div class="col-sm-3 col-md-2">
			<div class="row">
				<aside id="profil" class="col-md-12">
					<h3>Mon profil</h3>
					<img src="assets/img/Anais1.jpg" alt="photo de profil" class="img-circle" data-toggle="dropdown"  width="150" height="150">
					<p>Pseudo</p>
					<p>Nom / Prénom</p>
					<p>Localisation</p>
					<p>Niveau de joueur</p>
					<p>Sexe / Age</p>
					<p><a href="">Mes événements</a></p>
					<p><a href="">Editer mon profil</a></p>
				</aside>
			</div> <!-- End of row -->
		</div> <!-- End of sm-2 -->
		<!-- FIN DE SECTION RESUME DE PROFIL -->
		
		<!-- SECTION FORMULAIRE DE MODIFICATION DES DONNEES UTILISATEUR -->
		<form class="col-sm-7 col-md-8 col-sm-offset-1">
			<div class="form-group row">
				<label for="nom" class="col-xs-12 col-md-2 col-form-label">Nom </label>
				<div class="col-xs-12 col-md-10">
					<input type="text" class="form-control" name="nom" aria-describedby="Champ nom de l'utilisateur" placeholder="Nom de l'utilisateur">
				</div>
			</div>

			<div class="form-group row">
				<label for="prenom" class="col-xs-12 col-md-2 col-form-label">Prenom </label>
				<div class="col-xs-12 col-md-10">
					<input type="text" class="form-control" name="prenom" aria-describedby="Champ prenom de l'utilisateur" placeholder="Prenom de l'utilisateur">
				</div>
			</div>

			<div class="form-group row">
				<label for="pseudo" class="col-xs-12 col-md-2 col-form-label">Pseudo</label>
				<div class="col-xs-12 col-md-10">
					<input type="text" class="form-control" name="pseudo" aria-describedby="Champ pseudo de l'utilisateur" placeholder="Pseudo de l'utilisateur">
				</div>
			</div>

			<div class="form-group row">
				<label for="photo" class="col-xs-12 col-md-2 col-form-label">Photo de profil</label>
				<div class="col-xs-12 col-md-10">
					<input type="file" class="form-control-file" name="photo" aria-describedby="Champ file pour insérer une photo de profil">
				</div>
				<small name="photo" class="form-text text-muted col-md-6 col-md-offset-2">Détails concernant la photo de profil</small>
			</div>

			<div class="form-group row">
				<label for="date_naissance" class="col-xs-12 col-md-2 col-form-label">Date de naissance </label>
				<div class="col-xs-12 col-md-10">
					<input type="date" class="form-control" name="date_naissance" aria-describedby="Champ date de naissance de l'utilisateur">
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-xs-12 col-md-2 col-form-label">Email </label>
				<div class="col-xs-12 col-md-10">
					<input type="email" class="form-control" name="email" aria-describedby="Champ Email de l'utilisateur" placeholder="Email de l'utilisateur">
				</div>
				<small name="email" class="form-text text-muted col-md-6 col-md-offset-4">On ne partage votre Email avec personne.</small>
			</div>

			<div class="form-group row">
				<label for="lieu" class="col-xs-12 col-md-2 col-form-label">Votre département </label>
				<div class="col-xs-12 col-md-10">
					<select class="form-control" name="lieu">
						<option value="Val_d_oise">Val d'Oise</option>
						<option value="Paris">Paris</option>
					</select>
				</div>
				<small name="lieu" class="form-text text-muted col-md-6 col-md-offset-2">Renseigner votre département nous permet de vous afficher les événements dans votre région.</small>
			</div>


			<div class="form-group row">
				<label for="level" class="col-xs-12 col-md-2 col-form-label">Niveau du joueur</label>
				<div class="col-xs-12 col-md-10">
					<select class="form-control" name="level">
						<option value="debutant">Débutant</option>
						<option value="intermediaire">Intermédiaire</option>
						<option value="confirme">Confirmé</option>
					</select>
				</div>
			</div>
			
			<fieldset class="form-group row">
				<label for="sexe" class="col-xs-12 col-md-2 col-form-label">Sexe</label>
				<label class="form-check-inline col-md-4 col-md-offset-1">
					<input type="radio" class="form-check-input" name="sexe" value="Homme" checked> Homme  
				</label>
				<label class="form-check-inline col-md-4 col-md-offset-1">
					<input type="radio" class="form-check-input" name="sexe" value="Femme"> Femme
				</label>
			</fieldset>


		    <div class="form-group row">
				<label for="password" class="col-xs-12 col-md-2 col-form-label">Nouveau mot de Passe</label>
				<div class="col-xs-12 col-md-10">
					<input type="password" class="form-control" name="password" placeholder="Votre nouveau mot de passe">
				</div>
		    </div>

		    <div class="form-group row">
			  	<label for="confirm_password" class="col-xs-12 col-md-2 col-form-label">Confirmation</label>
			  	<div class="col-xs-12 col-md-10">
			  		<input type="password" class="form-control" name="confirm_password" placeholder="Confirmation du nouveau mot de passe">
			  	</div>
		    </div>

		  	<div class="col-md-4 col-md-offset-3">
		  		<button type="submit" class="btn btn-primary">Mettre à jour votre profil</button>
		  	</div>

		  	<div class="col-md-4">
		  		<button type="submit" class="btn btn-primary">Supprimer votre compte</button>
		  	</div>	
		</form>
		<!-- FIN DU FORMULAIRE DE MODIFICATION -->
	</div> <!-- End of row -->

</main> <!-- End of container-fluid-->