<!doctype html>
<html>
<head>
<?php
require("../head.php");
?>
	<link href="../style/back.css" type="text/css" rel="stylesheet" />
</head>
<body onload="$('.contenido').fadeIn(900);">
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior">
		</div>

		<div class="lateral_dch">
			<?php
			require("../dcha.php");
			?>
		</div>
		
		<div class="centro">
			<?php
			require("../menu.php");
			?>

			<div class="contenido info" id="contenido">
				<img class="imagen" src="../images/quien.jpg" width="100%"/>
				<span class="piedefoto"><a href="http://www.alvpeerz.com/">Foto: Álvaro Pérez</a></span>
				<br>
				<p><strong>Récords del Mundo</strong>  es la casa de discos del colectivo que integran desde 2014 los 
				componentes de Atención Tsunami junto a Rodrigo (Ediciones Ochoacostado), Pablo (producción) y Emilio 
				y Gonzalo (diseño). Nueve plusmarquistas del amor al arte que aúnan su experiencia previa y paralela en 
				otras plataformas autogestionadas para seguir haciendo, juntos, lo que les gusta.
				</p>
				<p><span class="titulo">Contacto</span><br>
				<script>printmail("info"); </script><br>
				</p>
				<p><span class="titulo">Contratación, comunicación y prensa</span><br>
				<span class="nombre">Miguel Bellas</span><br>
				<script>printmail("miguel"); </script><br>
				</p>
				<br>
			</div>
		</div>
	</div>
</body>
</html>
