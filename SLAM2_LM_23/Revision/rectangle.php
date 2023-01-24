<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rectangle</title>
</head>
<body>
	<center>
		<h1>Rectangle</h1>
		<p>
			Ecrire un Dev PHP qui calcule la surface et le périmètre d'un rectangle
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Longueur :</td>
					<td><input type="text" name="lg"></td>
				</tr>
				<tr>
					<td>Largeur :</td>
					<td><input type="text" name="lr"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Calculer" value="Calculer"></td>
				</tr>
			</table>
		</form>
		<?php

if (isset($_POST['Calculer'])){		
		$lg = $_POST['lg'];
		$lr = $_POST['lr'];
		$s = $lg*$lr;
		$p = 2*$lr+2*$lg;
		printf("La surface est de : %f", $s);
		printf("Le perimetre est de : %f", $p);
		

}



		  ?>
	</center>

</body>
</html>






