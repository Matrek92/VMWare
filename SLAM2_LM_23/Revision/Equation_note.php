<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Equation du premier degre</title>
</head>
<body>
	<center>
		<h1>Equation du premier degre</h1>
		<p>
			Ecrire un Dev PHP qui calcule la solution d'une équation du premier degré du type 2*ax+b*x+c = 0
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Premier coeff :</td>
					<td><input type="number" name="a"></td>
				</tr>
				<tr>
					<td>Deuxieme coeff :</td>
					<td><input type="number" name="b"></td>
				</tr>
				<tr>
					<td>Troisieme coeff :</td>
					<td><input type="number" name="c"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Calculer" value="Calculer"></td>
				</tr>
			</table>
		</form>
		<?php


if (isset($_POST['Calculer'])){		

	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	if ($a==-$b/2)
		printf("La solution est l'ensemble vide ");
	elseif ($b==-2*$a) 
		printf("La solution est l'ensemble vide ");
	else{
		$x = -$c/(2*$a+$b);
		printf("Le resultat est : %.2f", $x);
	}

}


		  ?>
	</center>
</body>
</html>