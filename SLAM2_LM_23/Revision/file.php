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
					<td>Nom du fichier :</td>
					<td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td><input type="reset" name="Annuler" value="Annuler"></td>
					<td><input type="submit" name="Afficher" value="Afficher"></td>
				</tr>
			</table>
		</form>
		<?php

if (isset($_POST['Afficher'])){	

	$nom = $_POST['nom'];
	$nbo = 0;
	$nbf = 0;
	
	$f = fopen ($nom, "r");  

	while ( ! feof ($f) ){ 

	$car  = fgetc($f);  

	if ($car == '{') $nbo ++;  

	else if ($car =='}' ) $nbf ++ ;  

}  

fclose ($f) ;  

printf("le nombre d'accolades ouvrantes est de : %d ", $nbo); 

printf("le nombre d'accolades fermantes est de : %d", $nbf); 

	
}	 
		

		  ?>
	</center>
</body>
</html>