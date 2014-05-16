<?php

	echo "Convertir de octal a decimal: ";


	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero octal para convertir a decimal.</p>";
		include("formularioOctDec.php");	

	}else{
		if($_POST["nombre"]=="" || $_POST["octal"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioOctDec.php");
		}else{


			$decimal= octdec($_POST['octal']);
			echo "<p>Su conversion de octal a decimal <b>" . $_POST['nombre'] . " </b>es: " . $decimal . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

  

?>