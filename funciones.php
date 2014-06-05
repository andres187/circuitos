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
}