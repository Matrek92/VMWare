<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tableau</title>
</head>
<body>
	<center>
		<h1>Tableau</h1>
		<p>
			Ecrire un Dev PHP qui permet de saisir des prix et afficher leur moyenne
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Les prix (;) :</td>
					<td><input type="text" name="tab"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Afficher" value="Afficher"></td>
				</tr>
			</table>
		</form>
<?php
if (isset($_POST['Afficher'])){		

	$tab = explode(";", $_POST['tab']);
	$moy = 0;
	for($i=0; $i<count($tab); $i++)
		$moy += $tab[$i];

	$moy /= count($tab);
	printf("La moyenne des prix est de : %.2f ", $moy);	
}	 		
?>
	</center>
</body>
</html>