<?php

<<<<<<< HEAD
include("funciones.php");
mostrar("hexadecimal", "decimal", "hexDec.php", "hexdec");
=======
	echo "Convertir de hexadecimal a decimal: ";


	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero hexadecimal para convertir a decimal.</p>";
		include("formularioHexDec.php");	

	}else{
		if($_POST["nombre"]=="" || $_POST["hexadecimal"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioHexDec.php");
		}else{


			$decimal= hexdec($_POST['hexadecimal']);
			echo "<p>Su conversion de hexadecimal a decimal <b>" . $_POST['nombre'] . " </b>es: " . $decimal . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

  

?>
>>>>>>> 7c131e33f8d7edb544f6bfd225e8bf4cf32266a5
