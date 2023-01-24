<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fibonacci</title>
</head>
<body>
	<center>
		<h1>
			La fonction fiboancci en récursivité
		</h1>
		<p>
			Ecrire une fonction récursive qui calcule le nombre de fibonacci d'un entier.
		</p>
		<form method="post">
			Nombre entier :
				<input type="text" name="nb">
				<input type="submit" name="Calculer" value="Calculer">
		</form>		
	
<?php

function fibonacci($nb){
	if($nb==0 || $nb==1) return 1;
	else return (fibonacci($nb-1) + fibonacci($nb-2));
}



if(isset($_POST['Calculer'])){

	$nb = $_POST['nb'];
	printf("Le résultat est : %d", fibonacci($nb));

}


?>
</center>
</body>
</html>