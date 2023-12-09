<?php
	echo "<div>
		<h2>Hors Forfait</h2>";
	for ($i=1; $i < 4; $i++) { 
		# code...
		echo "<div class='horsforfait'>
			<div class=".$i." >
				<div class='saisie-left'>
					<p>".$i." : </p>
				</div>
				<div class='saisie-right'>
					
					<div class='info'>
						<p class='date'>Date</p>
						<p class='libelle'>Libellé</p>
						<p class='montant'>Montant</p>
					</div>

					<div class='infoinput'>
						<input type='text' id='date'>
						<input type='text' id='libelle'>
						<input type='text' id='montant'>
					</div>
				</div>
			</div>
		</div>";
	}
	echo "</div>";
?>