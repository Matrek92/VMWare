<?php
	//on appelle le modèle
	require_once("modele/modele.php");

	function selectClasses()
	{
			//on récupère les classes
		$lesClasses = selectAllClasses(); //Modele
		//on réalise des contrôles sur les données

		//...

		//on renvoie les classes à l'index
		return $lesClasses;
	}



?>