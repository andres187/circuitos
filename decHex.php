<?php

	echo "Convertir de decimal a hexadecimal: ";


	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero decimal para convertir a hexadecimal.</p>";
		include("formularioDecHex.php");	

	}else{
		if($_POST["nombre"]=="" || $_POST["decimal"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioDecHex.php");
		}else{


			$hexadecimal= dechex($_POST['decimal']);
			echo "<p>Su conversion de decimal a hexadecimal <b>" . $_POST['nombre'] . " </b>es: " . $hexadecimal . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

  

?>