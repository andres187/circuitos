<form action="octDec.php" method="post">


   <p>Nombre: </p>
   <input type="text" name="nombre" size="20" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"];}?>">

   <p>Numero Octal: </p>
   <input type="text" name="octal" size="20" value="<?php if(isset($_POST["octal"])){ echo $_POST["octal"];}?>">

   <p><input type="submit" /></p>


</form>
