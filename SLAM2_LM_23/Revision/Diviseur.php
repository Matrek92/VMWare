<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Equation du premier degre</title>
</head>
<body>
	<center>
		<h1>Diviseurs</h1>
		<p>
			Ecrire un Dev PHP qui permet de saisir un entier et de calculer ses diviseurs
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Nombre entier :</td>
					<td><input type="text" name="nb"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Afficher" value="Afficher"></td>
				</tr>
			</table>
		</form>
		<?php


if (isset($_POST['Afficher'])){		

	$nb = $_POST['nb'];
	for($div =1; $div <= $nb; $div++){
		if($nb%$div==0){
			printf("%d est un diviseur de %d<br>", $div, $nb);
		}
	}
	}




		  ?>
	</center>
</body>
</html>