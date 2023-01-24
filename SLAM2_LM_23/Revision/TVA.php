<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prix global TTC</title>
</head>
<body>
	<center>
		<h1>Prix global TTC</h1>
		<p>
			Ecrire un Dev PHP qui calcule le prix global TTC
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Prix HT :</td>
					<td><input type="number" name="prix_HT"></td>
				</tr>
				<tr>
					<td>Taux de TVA :</td>
					<td><input type="number" step="0.01" name="Taux_TVA"></td>
				</tr>
				<tr>
					<td>Quantite :</td>
					<td><input type="number" name="Quantite"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Calculer" value="Calculer"></td>
				</tr>
			</table>
		</form>
		<?php


if (isset($_POST['Calculer'])){		

	$prix_HT = $_POST['prix_HT'];
	$Taux_TVA = $_POST['Taux_TVA'];
	$Quantite = $_POST['Quantite'];
	$prix_TTC = $prix_HT*(1+$Taux_TVA/100)*$Quantite;
	printf("Le prix global TTC est de : %.2f ", $prix_TTC);

}


		  ?>
	</center>
</body>
</html>