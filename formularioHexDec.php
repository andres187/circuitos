<form action="hexDec.php" method="post">


   <p>Nombre: </p>
   <input type="text" name="nombre" size="20" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"];}?>">

   <p>Numero hexadecimal: </p>
   <input type="text" name="hexadecimal" size="20" value="<?php if(isset($_POST["hexadecimal"])){ echo $_POST["hexadecimal"];}?>">

   <p><input type="submit" /></p>


</form>
