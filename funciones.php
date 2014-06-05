<?php


function formulario($ruta, $tipo){
?>
	<form action="<?=$ruta ?>" method="post">
	   <p>Nombre: </p>
	   <input type="text" name="nombre" size="20" >

	   <p>Numero <?=$tipo ?>: </p>
	   <input type="text" name="<?=$tipo ?>" size="20">

	   <p><input type="submit" /></p>
	</form>
<?php
<<<<<<< HEAD
}


function mostrar($conv, $to, $ruta, $func){
		echo "Convertir de " . $conv . " a " . $to . ": ";

	if(!$_POST){
		echo "<p>Ingresar tu nombre y numero " . $conv . " para convertir a " . $to . ".</p>";
		formulario($ruta, $conv);
	}else{
		if($_POST["nombre"]=="" || $_POST[$conv]==""){
			echo"<p>No pueden quedar vacios los campos.</p>";
			formulario($ruta, $conv);
		}else{

			$numero= $func($_POST[$conv]);
			echo "<p>Su conversion de " . $conv . " a " . $to . " <b>" . $_POST['nombre'] . " </b>es: " . $numero . "</p>";
			echo '<a href="index.php">Regresar</a>';

		}
	}

=======
>>>>>>> 7c131e33f8d7edb544f6bfd225e8bf4cf32266a5
}