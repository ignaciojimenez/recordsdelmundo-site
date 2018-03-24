<!doctype html>
<html lang="es">
<head>
<?php

if (($_SERVER["HTTP_HOST"] == "estoescasa.com") || ($_SERVER["HTTP_HOST"] == "https://www.estoescasa.com"))
{
header("Location: /estoescasa");
}

require("head.php");
?>
</head>
<body>
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior">
		</div>

		<div class="lateral_dch">
			<?php
			require("dcha.php");
			?>
		</div>
		
		<div class="centro">
			<?php
			require("menu.php");
			?>
			<div class="contenido" id="contenido">

			</div>
		</div>
	</div>
</body>
</html>
