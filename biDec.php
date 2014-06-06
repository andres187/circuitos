<?php
	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("binario", "decimal", "biDec.php", "bindec");

		?>

		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Binario a decimal...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Binario a decimal.</h2>
		  <p>Para realizar la conversión de binario a decimal, realice lo siguiente:

    <br>Inicie por el lado derecho del número en binario, cada cifra multiplíquela por 2 elevado a la potencia consecutiva (comenzando por la potencia 0, 2).
    <br>Después de realizar cada una de las multiplicaciones, sume todas y el número resultante será el equivalente al sistema decimal.</p>
		 </div>
	</article>
	</section>

	<?php
	include("pie.php");