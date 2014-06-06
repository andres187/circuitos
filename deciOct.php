<?php


	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("decimal", "octal", "deciOct.php", "decoct");
		?>
		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Decimal a octal...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Decimal a octal.</h2>
		  <p>Los números decimales son el sistema de normas fácilmente comprensibles por los seres humanos. Pero los circuitos digitales opera en números binarios. En determinadas operaciones de decimal a octal conversión es necesaria. Puede ser logrará por el método de división sucesivos.</p>
		 </div>

	</article>
	</section>

	<?php
	include("pie.php");
