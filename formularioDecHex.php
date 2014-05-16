<form action="decHex.php" method="post">


   <p>Nombre: </p>
   <input type="text" name="nombre" size="20" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"];}?>">

   <p>Numero decimal: </p>
   <input type="text" name="decimal" size="20" value="<?php if(isset($_POST["decimal"])){ echo $_POST["decimal"];}?>">

   <p><input type="submit" /></p>


</form>
