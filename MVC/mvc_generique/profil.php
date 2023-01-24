<h2> Votre profil</h2>


<h4>Nom : <?= $_SESSION['nom'] ?></h4>
<h4>Prénom : <?= $_SESSION['prenom'] ?></h4>
<h4>Email : <?= $_SESSION['email'] ?></h4>
<h4>Rôle : <?= $_SESSION['role'] ?></h4>
<br/>
<?php 
	if(isset($_SESSION['modif']) && $_SESSION['modif']==1)
	{
		echo"<br/>Mot de passe expiré, vous devez changer votre mot de passe !";
		$_SESSION['modif'] =0;
	}

?>
<h3>Changement de mot de passe</h3>
<form method="post">
	New mot de passe : <br/>
	<input type="password" name="mdp"><br/>
	<input type="submit" name="modifierMdp" value="Changer mot de passe">
</form>

<?php

	if(isset($_POST['modifierMdp']))
	{
		$mdp = $_POST['mdp'];
		//hacher le nouveau mot de passe
		$unControleur->setTable("grainSel");
			$nb = $unControleur->selectAll()[0]['nb'];
			$mdpCrypte = sha1($mdp.$nb);
		//le rechercher dans la table historique
		$unControleur->setTable("historique");
		$lesResultats = $unControleur->selectAll();
		$trouve = false;
		foreach ($lesResultats as $unResultat) {
			if($mdpCrypte == $unResultat['mdp']){
				echo "<br/>Mot de passe déjà utilisé";
				$trouve = true;
				break;
			}
		}
		if($trouve == false)
		{
			//on réalise la modification
			$dtMdp = date("Y-m-d");
			$tab = array("mdp"=>$mdp, "dateMdp"=>$dtMdp);
			$iduser = $_SESSION['iduser'];
			$unControleur->setTable("user");
			$unControleur->update($tab, "iduser", $iduser);
			echo "<br/>Modification réussie";
		}
	}