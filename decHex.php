<?php

	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("decimal", "hexadecimal", "decHex.php", "dechex");

		?>
		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Decimal a hexadecimal...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Decimal a hexadecimal.</h2>
		  <p>Decimal a hexadecimal conversión puede lograrse por método de división sucesivas.</p>
		 </div>

	</article>
	</section>

	<?php
	include("pie.php");
