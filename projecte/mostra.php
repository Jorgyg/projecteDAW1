<?php 


include("bambas.php");

	echo '

	<div width="100%" height="100px" class="ddd"> <form action="index.php" class="fcc"> 
	<button class="bap"><div align="center" class="cap">Bambas<span class="tit">Jorge</span>

	</div>
	</button>
	
	</form>
	<div class="fff">';

	if (!isset($_SESSION["usuari"])) {
		echo '
		<div class="carro" align="left">
		<a href="index.php?action=log" class="bi bi-person"></a>
		<ul class="nav">
		<li class="aaa"><a href=""><span class="bi bi-bag"></span></a>
		<ul> 

		';		

		$compt  = array();
		foreach ($result as $key) {
			array_push($compt, $key["nom"]);
		}

		if (isset($_SESSION["arr"])) {
			for ($i= 0; $i < $_SESSION["roba"]; $i++) { 	
				echo '<li><a href="">'. $compt[$_SESSION["arr"][$i] - 1] . ' Talla: ' .$_SESSION["tall"][$i] . '</a></li>';
			}
		echo '<li><a href="carro.php?accio=borrar">Borrar carro</a></li>
		<li><a href="index.php?action=comprar">Realitzar compra</a></li>';
		}
		echo '</ul></li></ul></div>
	</div></div>';

	} else if (isset($_SESSION["usuari"])){
		echo  '' .$_SESSION["usuari"] . '<br>';

		if ($_SESSION["feina"] == "Edit") {
				echo '<a align="right" class="btn btn-primary" role="button" href="bambes/index.php">Vista de bambes</a>';
			} else if ( $_SESSION["feina"] == "Admin") {
				echo '<a class="btn btn-primary" role="button" href="bd/index.php">Vista d\'empleats</a>';
			}
		echo '<p><a href="index.php?action=destroy">Logout</a></p>
		 </div></div>';
		
		}
echo '	
<div width="100%" class="principal" align="center">';

$count = 0;
foreach($result as $row) {

	if ($count % 2 == 0) {
		echo '<div class="producte" align="center">';
	}
echo '
			<div class="prod">
			<img src="img/' . ($count + 1) .'/b' . ($count + 1) . '.png" class="img">
			<div class="cont">' . $row['nom'] .'</div>
			<form action="index.php">
			<div  class="preu">'.$row['preu'] .'€</div>';

			if ($count % 2 == 0) {
				echo '<input type="submit" value="Mes info" name="'. $count .'" class="b1">';
			} else {
				echo '<input type="submit" value="Mes info" name="'. $count .'" class="b2">';
			}
			echo'</form></div>';

if ($count % 2 != 0) {
		echo '</div>';
}
	$count++;
}

echo '';

	

 ?>