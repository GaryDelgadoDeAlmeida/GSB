<div class="body">
	<div class="contenu">
		<h1>Gestion des Frais</h1>
		<div class="formu">
			<form method="POST" action="Controller/c_gestionSaisie.php">
				
				<?php include('Vue/v_saisie.php'); ?>

				<?php include('Vue/v_fraisforfait.php'); ?>

				<?php include("Vue/v_horsforfait.php"); ?>

				<p></p>
				
				<input type="reset" value="Réinitialiser"><br>
				<input type="submit" value="Soumettre la requête">
			</form>
		</div>
	</div>
</div>