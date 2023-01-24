<<!DOCTYPE html>
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
			Ecrire un Dev PHP qui calcule la solution d'une équation du premier degré
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Premier coeff :</td>
					<td><input type="text" name="a"></td>
				</tr>
				<tr>
					<td>Deuxieme coeff :</td>
					<td><input type="text" name="b"></td>
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
	if ($a==0){
		if ($b==0)
			printf("x = Ensemble R");
		else
			printf("x = Ensemble vide");
		}
	else{
		$x=-$b/$a;
		printf("Solution : %f", $x);
	}

}


		  ?>
	</center>
</body>
</html>