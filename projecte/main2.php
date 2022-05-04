<?php 

include("bambas.php");
foreach($result as $row) {


 echo '
	<div width="100%" height="100px" class="ddd" align="center"> <form action="index.php">
	<button class="bap"><div align="center" class="cap">Bambas<span class="tit">Jorge</span>
	</div></button></form></div>

 	<div class="mostra"><img src="img/' . $b .'/b' . $b .'.png" width="300px" class="im"/>
 		<img src="img/' . $b .'/' . $b .' tumbada.png" width="300px" class="im"/>
 		<table align="right" width="20%" class="taula">

 		<tr>
			<th class="bdes" colspan="3" align="left">'. $row['nom']. '</th>
			<th>' . $row['preu'] . '€</th>
		</tr>		
 	
		<tr>
			<th class="talla" colspan="3" align="left"> Talles disponibles:</th>
		</tr>
		<form action="index.php?bambas=' . $b . '">
		<tr>
			<td><input type="submit" class="in" value="35" name="talla"/></td>
			<td><input type="submit" class="in" value="36" name="talla"/></td>
			<td><input type="submit" class="in" value="37" name="talla"/></td>
			<td><input type="submit" class="in" value="38" name="talla"/></td>
		</tr>
		<tr>		
			<td><input type="submit" class="in" value="39" name="talla"/></td>
			<td><input type="submit" class="in" value="40" name="talla"/></td>
			<td><input type="submit" class="in" value="41" name="talla"/></td>
			<td><input type="submit" class="in" value="42" name="talla"/></td>
		</tr>
		<tr>	
			<td><input type="submit" class="in" value="43" name="talla"/></td>
			<td><input type="submit" class="in" value="44" name="talla"/></td>
			<td><input type="submit" class="in" value="45" name="talla"/></td>
			<td><input type="submit" class="in" value="46" name="talla"/></td>
		</tr>
		<input id="prodId" name="bambas" type="hidden" value="' . $b .'">';


		if (isset($talla)) {

			$resultat = takeStock($b, $talla);

			$_SESSION["talla"] = $talla;
			echo'<tr>
			<th>Talla: ' . $_SESSION["talla"]  . '</th>
			<th>En stock: ' . $_SESSION["stock"]  . '</th>';

			
			echo '</th>
			<td colspan="4" align="center" id="roll">Cantitat: <input type="number" class="roll" value="1" name="Cantitat" required/></td>
			<tr>
			';

		} else {
			echo '<tr>		
 			<td colspan="4" align="center" id="roll">Cantitat: <input type="number" class="roll" value="1" name="Cantitat"/></td>
 			</tr>';
		}
		echo 
		'<tr>
		<td colspan="4">' .$row["descripcio"] .'</td>
		</tr><tr>		
 			<td colspan="4" align="center"><input type="submit" class="carr" value="Afegir al carro" name="comp"/></td>
 		</tr>
 		</form>
 		</table>
 		<br>
 		<div>
 		<img src="img/' . $b .'/' . $b .' girada.png" width="300px" class="im"/>
 		<img src="img/' . $b .'/' . $b .' dalt.png" width="300px" class="im"/>		
 		</div>
	';
} ?>