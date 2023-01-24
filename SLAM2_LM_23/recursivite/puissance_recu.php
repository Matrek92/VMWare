<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factoriel</title>
</head>
<body>
	<center>
		<h1>
			La fonction puissance en récursivité
		</h1>
		<p>
			Ecrire une fonction récursive qui calcule la puissance d'un nombre entier.
		</p>
		<form method="post">
			Nombre entier :
				<input type="text" name="a">
			Exposant : 
				<input type="text" name="b">
				<input type="submit" name="Calculer" value="Calculer">
		</form>		
	
<?php

function puissance($a, $b){
	if($b==0) return 1;
	else return (puissance($a, $b-1) * $a);
}



if(isset($_POST['Calculer'])){

	$a = $_POST['a'];
	$b = $_POST['b'];
	printf("Le résultat est : %d", puissance($a, $b));

}


?>
</center>
</body>
</html>