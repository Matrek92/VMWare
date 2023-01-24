<?php
	require_once("controleur/controleur.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scolarité iris</title>
</head>
<body>
	<center>
		<h1>Scolarité d'IRIS</h1><br/>
		
		<?php 
		$lesClasses = selectClasses();
		require_once("vue/vue_les_classes.php");
		?>
	</center>

</body>
</html>