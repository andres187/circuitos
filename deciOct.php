<?php

<<<<<<< HEAD
include("funciones.php");
mostrar("decimal", "octal", "deciOct.php", "decoct");
=======
	echo "Convertir de decimal a octal: ";


	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero decimal para convertir a octal.</p>";
		include("formularioDeciOct.php");	

	}else{
		if($_POST["nombre"]=="" || $_POST["decimal"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioDeciOct.php");
		}else{


			$octal= decoct($_POST['decimal']);
			echo "<p>Su conversion de decimal a octal <b>" . $_POST['nombre'] . " </b>es: " . $octal . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

  

?>
>>>>>>> 7c131e33f8d7edb544f6bfd225e8bf4cf32266a5
