<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fibonacci</title>
</head>
<body>
  <center>
    <h1>Fibonacci</h1>
    <p>
      Ecrire un Dev PHP qui permet de saisir des nombres et calculer leur résultat suivant la suite de Fibanocci
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

function fibonacci($nb){  

for($i = 0; $i<=$nb; $i++){

    if($i<=1)

      $result = $i;
    else{

      $result = $nb1 + $nb2;

      $nb1 = $nb2 ;

      $nb2 = $result;
      

      }    

    }  
}

if(isset($_POST['Calculer'])){
  $nb = $_POST['nb'];

printf("Le résultat est : %d", fibonacci($nb));

}

 

?>