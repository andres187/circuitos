<?php

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