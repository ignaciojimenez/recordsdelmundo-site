<!doctype html>
<html>
<head>
	<link href="../../style/back.css" type="text/css" rel="stylesheet" />
	<link href="../../style/store.css" type="text/css" rel="stylesheet" />
<?php
require("../../head.php");
?>
	<link href="../../style/back.css" type="text/css" rel="stylesheet" />
	<link href="../../style/store.css" type="text/css" rel="stylesheet" />
	<meta name="robots" content="noindex" />
</head>
<body onload="$('.contenido').fadeIn(1100);">
	<div class="container">
		<div class="lateral_izq">
			LATERAL IZQ
		</div>
		<div class="lateral_izq_inferior">
		</div>

		<div class="lateral_dch">
			<?php
				require("../../dcha.php");
			?>
		</div>

		<div class="centro">
			<?php
			require("../../menu.php");
			?>

			<div class="contenido tienda" id="contenido" style="line-height:1.3em;">
			<p><strong>Muchas gracias</strong> por tu compra<br></p>
                        <p>Todos nuestros productos son de libre descarga<br></p>
                        <p>Por lo que si quieres descargarlo, accede a la p&aacute;gina del producto.</p>
			</div>
		</div>
	</div>
</body>
</html>
