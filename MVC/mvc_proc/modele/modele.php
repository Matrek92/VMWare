<?php 
	//extraction //injection des données dans la base
function connexion()
{
	$unPDO = null;
	try{
	$unPDO = new PDO("mysql:host=localhost;dbname=mon_iris_lm_23", "root", ""); //PHP DATA Object
	}
		
		catch(PDOexception $exp){
			echo "Erreur de connexion à la BDD <br/>";
			echo $exp->getMessage();
		}
		return $unPDO;
}
function selectAllClasses()
{
	$unPDO = connexion();
	if(connexion () != null){
		$requete = "select * from classe ; ";
		//preparation de la requete
		$select= $unPDO->prepare($requete);
		$select->execute();
		//extraction des classes
		$lesClasses = $select->fetchAll();	
		return $lesClasses;
	}
	else
		return null;



}
?>