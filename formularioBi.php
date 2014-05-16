<form action="biDec.php" method="post">


   <p>Nombre: </p>
   <input type="text" name="nombre" size="20" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"];}?>">

   <p>Numero binario: </p>
   <input type="text" name="binario" size="20" value="<?php if(isset($_POST["binario"])){ echo $_POST["binario"];}?>">

   <p><input type="submit" /></p>


</form>
