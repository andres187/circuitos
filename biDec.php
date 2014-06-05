<?php
	
<<<<<<< HEAD
include("funciones.php");
mostrar("binario", "decimal", "biDec.php", "bindec");

=======
	echo "Convertir de binario a Decimal: ";

	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero binario para convertir a decimal.</p>";
		include "formularioBi.php";
	}else{
		if($_POST["nombre"]=="" || $_POST["binario"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioBi.php");
		}else{

			$decimal= bindec($_POST['binario']);
			echo "<p>Su conversion de binario a decimal <b>" . $_POST['nombre'] . " </b>es: " . $decimal . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}
>>>>>>> 7c131e33f8d7edb544f6bfd225e8bf4cf32266a5

