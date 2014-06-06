<?php

	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("octal", "decimal", "octDec.php", "octdec");
		?>
		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Octal a decimal...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Octal a decimal.</h2>
		  <p>Los ocho primeros dígitos de números decimales de 0 a 7 destinados al sistema numérico Octal.Por lo tanto, la base del sistema numérico octal es representada por 8. El sistema numérico decimal utiliza 10 números de 0 a 9. Por lo tanto, la base de números decimales está representada por 10. En ciertas operaciones, Octal a Decimal conversión número es necesario entender las operaciones por los seres humanos. </p>
		 </div>


	</article>
	</section>

	<?php
	include("pie.php");

