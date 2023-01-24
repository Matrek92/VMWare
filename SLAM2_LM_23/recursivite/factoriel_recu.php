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
			La fonction factoriel en récursivité
		</h1>
		<p>
			Ecrire une fonction récursive qui calcule le factoriel d'un nombre entier.
		</p>
		<form method="post">
			Nombre entier :
				<input type="text" name="nb">
				<input type="submit" name="Calculer" value="Calculer">
		</form>		
	
<?php

function factoriel($nb){
	if($nb==0 || $nb==1) return 1;
	else return (factoriel($nb-1) + factoriel($nb-2));
}



if(isset($_POST['Calculer'])){

	$nb = $_POST['nb'];
	printf("Le résultat est : %d", factoriel($nb));

}


?>
</center>
</body>
</html>