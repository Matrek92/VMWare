<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factoriel</title>
</head>
<body>
	<center>
		<h1>Factoriel</h1>
		<p>
			Ecrire un Dev PHP qui permet de saisir des nombres et calculer leur factoriel
		</p>
		<form method="post" action="">
			<table border="0">
				<tr>
					<td>Le nombre :</td>
					<td><input type="text" name="nb"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Calculer" value="Calculer"></td>
				</tr>
			</table>
		</form>
		<?php


	

	

	function factoriel($nb){
		$fact = 1;
		for($i=1; $i<=$nb;$i++)
			$fact *= $i;
		printf("Le factoriel de %d est %d ", $nb, $fact);
	}

if (isset($_POST['Calculer'])){	

	$nb = $_POST['nb'];
	factoriel($nb);
	
}	 
		

		  ?>
	</center>
</body>
</html>