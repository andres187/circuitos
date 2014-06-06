<?php
	include("cabecera.php");

	?>

	</br>
	<section class="row">
	<article class="row panel radius">

		<?php
		include("funciones.php");
		mostrar("hexadecimal", "decimal", "hexDec.php", "hexdec");
		?>
		<br>
		<a href="#" data-reveal-id="firstModal" class="radius">Hexadecimal a decimal...</a>
		<div id="firstModal" class="reveal-modal" data-reveal>
		  <h2>Hexadecimal a decimal.</h2>
		  <p>Los números hexadecimales con 16 dígitos y oscila entre el 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E y f. 16 de Base se utiliza para representar números hexadecimales. Considerando que los números decimales son la base va de 10 números de 0 a 9, utilizados en los cálculos aritméticos y estas cifras pueden ser fácilmente comprensibles por los seres humanos para realizar y comprender las operaciones digitales. En electrónica digital el cómputo de ambos hexadecimal Decimal y conversión Decimal a hexadecimal de conversión son importantes.</p>
		 </div>

	</article>
	</section>

	<?php
	include("pie.php");