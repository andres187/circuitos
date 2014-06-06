<?php

	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("decimal", "binario", "decBi.php", "decBin");

		?>
		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Decimal a binario...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Decimal a binario.</h2>
		  <p>Se divide el número del sistema decimal entre 2, cuyo resultado entero se vuelve a dividir entre 2, y así sucesivamente hasta que el dividendo sea menor que el divisor, 2. Es decir, cuando el número a dividir sea 1 finaliza la división.</p>
		 </div>

	</article>
	</section>

	<?php
	include("pie.php");