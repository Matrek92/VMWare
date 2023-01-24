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
          <td>Les 10 nombres (;) :</td>
          <td><input type="text" name="tab"></td>
        </tr>
        <tr>
          <td>Nombre a chercher : </td>
          <td><input type="number" name="nb">
        </tr>
        <tr>
          <td><input type="reset" name="Annuler" value="Annuler"></td>
          <td><input type="submit" name="Chercher" value="Chercher"></td>
        </tr>
      </table>
    </form>
    <?php

if(isset($_POST['Chercher'])){

$tab = explode(";", $_POST['tab']);
$nb = $_POST['nb'];
$cpt = 0;

for($i = 0; $i<=10; $i++){
  if($tab[$i] == $nb)
    $cpt++;
}
printf("Le nombre d'occurence de %d est de : %d ", $nb, $cpt);
}
?>
  </center>
</body>
</html>










