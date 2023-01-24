		<h3>Liste des classes</h3>
		<table border='1'>
			<tr>
				<td>Id classe </td>
				<td> Nom </td>
				<td>Salle de cours</td>
				<td>Diplôme préparé</td>
			</tr>
		
		<?php
		foreach ($lesClasses as $uneClasse) 
		{
			echo "<tr>";
			echo"<td>".$uneClasse['idclasse']."</td>";
			echo"<td>".$uneClasse['nom']."</td>";
			echo"<td>".$uneClasse['salle']."</td>";
			echo"<td>".$uneClasse['diplome']."</td>";
			echo "</tr>";
		}
		?>
		</table>