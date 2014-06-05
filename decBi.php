<?php

<<<<<<< HEAD
include("funciones.php");
mostrar("decimal", "binario", "decBi.php", "decBin");
=======
	echo "Convertir de decimal a binario: ";


	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero decimal para convertir a binario.</p>";
		include("formularioDeci.php");	

	}else{
		if($_POST["nombre"]=="" || $_POST["decimal"]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			include("formularioDeci.php");
		}else{


			$binario= decbin($_POST['decimal']);
			echo "<p>Su conversion de decimal a binario <b>" . $_POST['nombre'] . " </b>es: " . $binario . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

  

?>
>>>>>>> 7c131e33f8d7edb544f6bfd225e8bf4cf32266a5
